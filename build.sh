#!/bin/sh
zip -r -9 dist/gruseltour-berlin-eighteen-1.0.0.zip src \
    -x */.DS_Store \
    -x */.git \
    -x */.svn \
    -x */.idea \
    -X */__MACOSX