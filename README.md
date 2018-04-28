# yy-onix-php
PHP ONIX parser library, including both stream and simple(non-stream) parsers.

Simple parser is faster, but consumes lots of memory. 
It is recommended to parse small files.

Stream parser consume much less memory, but consequently much slower than the simple one. 
It is recommended to parse large files when the memory resource is limited. 

Currently, this library only support Onix Book Spec 2.1.

## How to use
Please refer to the tests.

## TODO:
+ [x] support ONIX Book Spec 2.1
+ [] support ONIX Book Spec 3.0
