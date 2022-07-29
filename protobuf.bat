cd /d %~dp0
set PROTOC_VERSION=21.4
set PROTO_WAVES_VERSION=1.4.3

set PROTOC_URL=https://github.com/protocolbuffers/protobuf/releases/download/v%PROTOC_VERSION%/
set PROTOC_ARCH=protoc-%PROTOC_VERSION%-win32.zip
set PROTO_WAVES_URL=https://github.com/wavesplatform/protobuf-schemas/archive/
set PROTO_WAVES_ARCH=v%PROTO_WAVES_VERSION%.zip

set PROTO_STABLE=src
set PROTO_TEMP=protobuf-%random%%random%

mkdir %PROTO_TEMP%
cd %PROTO_TEMP%

curl -fsSL -o %PROTOC_ARCH% %PROTOC_URL%%PROTOC_ARCH%
7z x %PROTOC_ARCH% -aoa

curl -fsSL -o %PROTO_WAVES_ARCH% %PROTO_WAVES_URL%%PROTO_WAVES_ARCH%
7z x %PROTO_WAVES_ARCH% -aoa

mkdir %PROTO_STABLE%
php ..\protobuf.php protobuf-schemas-%PROTO_WAVES_VERSION%/proto/waves/*.proto
bin\protoc --php_out=%PROTO_STABLE% -Iprotobuf-schemas-%PROTO_WAVES_VERSION%/proto protobuf-schemas-%PROTO_WAVES_VERSION%/proto/waves/*.proto

xcopy /S /Y %PROTO_STABLE% ..\%PROTO_STABLE%\
cd ..
rmdir /s /q %PROTO_TEMP%
pause
