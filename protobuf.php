<?php

$php_namespace = 'Waves\\\\Protobuf';
$php_metadata_namespace = 'Waves\\\\ProtobufMetadata';

if( !isset( $argv[1] ) )
    $argv[1] = '*.proto';

$endl = "\n";
$trigger_prolog = 'package ';
$trigger_prolog_length = strlen( $trigger_prolog );

$files = rglob( '*.proto' );
foreach( $files as $file )
{
    $content = file_get_contents( $file );
    if( strpos( $content, 'php_namespace' ) !== false )
        continue;
    $strings = explode( $endl, $content );
    $trigger = 0;
    $content = '';
    foreach( $strings as $string )
    {
        if( $trigger === 0 )
        {
            if( substr( $string, 0, $trigger_prolog_length ) === $trigger_prolog )
                $trigger = 1;
        }
        else
        if( $trigger === 1 )
        {
            $content .= 'option php_namespace = "' . $php_namespace . '";' . $endl;
            $content .= 'option php_metadata_namespace = "' .$php_metadata_namespace. '";' . $endl;
            $trigger = -1;
            echo $file . ' file patched SUCCESS' . $endl;
        }

        $content .= $string . $endl;
    }

    file_put_contents( $file, $content );
}

function rglob( $pattern, $flags = 0 )
{
    $files = glob( $pattern, $flags );
    $dirs = glob( dirname( $pattern ).'/*', GLOB_ONLYDIR|GLOB_NOSORT );
    $files = array_diff( $files, $dirs );
    foreach( glob( dirname( $pattern ).'/*', GLOB_ONLYDIR|GLOB_NOSORT ) as $dir )
        $files = array_merge( $files, rglob( $dir . '/' . basename( $pattern ), $flags ) );
    return $files;
}