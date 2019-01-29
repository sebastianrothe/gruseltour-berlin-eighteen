#!/bin/sh
zip -r -9 dist/gruseltour-berlin-eighteen-1.0.0.zip gruseltour-berlin-eighteen \
    -x */.DS_Store \
    -x */.git \
    -x */.svn \
    -x */.idea \
    -X */__MACOSX