<!-- .github/copilot-instructions.md - Project-specific guidance for AI coding agents -->

# Quick orientation

- This is a small, PHP-based offline e‑commerce demo built for WAMP/Apache + MySQL (see `README.md`).
- Public pages are simple PHP files in the repository root (not an MVC framework). The site entry used here is `inde.php` (note the filename: `inde.php`, not `index.php`).
- Database: MySQL database `db_olshop` (SQL dump in `db_olshop.sql`). Important tables: `tb_produk` and `tb_transaksi`.

# Big-picture architecture (as discovered)

- No framework: plain PHP files echoing HTML. Typical pattern: include `koneksi.php` and run `mysql_*` calls.
  - Example usage: `include"koneksi.php"; $q = mysql_query("select * from tb_produk;",$c);`
- DB connection lives in `koneksi.php` and exposes the connection resource `$c`.
- Static assets (images) live in `gambar/` and code references them by filename stored in `tb_produk.gambar`.
- Transactions are handled by `Transaksi.php` (render form) and `tambahtrans.php` (persists transaction).

# Project-specific conventions and patterns to follow

- Use the existing DB variables and connection name: `koneksi.php` sets `$h, $u, $p, $d` and `$c`.
  - When reading or writing DB code, expect the codebase to use the deprecated `mysql_*` API and the `$c` variable.
- Pages render HTML inline inside PHP `echo` blocks. When making small changes, prefer modifying the existing `echo`/inline HTML style to keep consistency.
- Filenames sometimes differ from common conventions (e.g., `inde.php` is the home page). Verify the filename before changing routing/links.
- Product fields (from `db_olshop.sql`): `id_produk`, `nama_produk`, `nama_kategori`, `gambar`, `harga`, `ukuran` — use those exact names when querying.

# Important integration points & operational steps

- To run locally (developer flow):
  1. Install WAMPServer (or similar local Apache+MySQL+PHP stack) per `README.md`.
  2. Import `db_olshop.sql` into phpMyAdmin -> create `db_olshop`.
  3. Place the project folder in your local webroot (e.g., `www` for WAMP).
  4. Open `http://localhost/<folder>/inde.php` in the browser.

- Note: the code uses `mysql_*` functions which require PHP 5.x compatibility. If running newer PHP, tests/changes may be required (not auto-migrated).

# Safety, testing, and cautious edits

- This codebase performs no input sanitization. When editing SQL/parameter code, follow these rules:
  - Prefer to keep changes minimal and consistent with current style for small fixes.
  - For security improvements (e.g., converting to `mysqli`/PDO and prepared statements), do it as a contained refactor with tests (and inform the maintainer). Provide a migration plan because changing DB API touches many files (`inde.php`, `Merek_Sepatu.php`, `Transaksi.php`, `tambahtrans.php`, etc.).

# Concrete examples (copy/paste friendly) found in the repo

- DB connection: `koneksi.php`
  - Uses: `$c = mysql_connect($h,$u,$p)` and `mysql_select_db($d,$c)`.
- Read products: `inde.php` and `Merek_Sepatu.php`
  - Pattern: `$q = mysql_query("select * from tb_produk;",$c)` then `while($r=mysql_fetch_array($q)){ ... $r['nama_produk'] ... }`.
- Transaction flow: `Transaksi.php` displays the form populated with values fetched by `id` query param: `$_GET['id']` then query `tb_produk where id_produk like'$idb'`.

# When you edit code, prefer these low-risk guidelines

- Small UI/content fixes: change inline HTML in the respective PHP file.
- DB field/name changes: update `db_olshop.sql` and all code references; test locally after importing the updated SQL.
- Upgrading DB API: implement behind a compatibility layer (helper file) and convert files incrementally with tests.

# Files to look at for context

- `README.md` — high-level run instruction (WAMPServer requirement).
- `koneksi.php` — DB connection and `$c` variable.
- `db_olshop.sql` — schema and seed data (shows exact table/field names).
- `inde.php`, `Merek_Sepatu.php`, `Transaksi.php`, `tambahtrans.php` — key user-facing flows.
- `gambar/` — image assets referenced by `tb_produk.gambar`.

# What I will NOT assume

- There is no routing engine, no unit tests, and no CI configuration discovered. Don't introduce heavy infra changes without a migration plan.

# Next steps for contributors (suggested)

- If asked to modernize: propose a staged migration to `mysqli`/PDO and a single DB helper wrapper. Show a small proof-of-concept on one page first.
- If asked to add features: prefer adding new files (not modifying all existing pages) and keep public filenames intact (e.g., don't rename `inde.php`).

---

If you'd like, I can (a) commit this file, (b) add a short PR template mentioning WAMP and PHP compatibility, or (c) create a small migration plan to move to mysqli/PDO. Which would you prefer next?
