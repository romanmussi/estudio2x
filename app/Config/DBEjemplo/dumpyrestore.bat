REM DUMP
"C:\Archivos de programa\PostgreSQL\9.1\bin\pg_dump.exe" --host localhost --port 5433 --username "postgres" --no-password  --format plain --verbose --file "C:\Documents and Settings\admin\Mis documentos\tmp\estudio2x.sql" "estudio2x"

REM RESTORE
REM "C:\Archivos de programa\PostgreSQL\9.1\bin\psql.exe" --host localhost --port 5433 --username postgres --dbname estudio2x -f "C:\htdocs\estudio2x\app\config\dbejemplo\estudio2x.sql"

PAUSE
