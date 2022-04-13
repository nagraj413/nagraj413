#!/bin/bash
echo "please provide the file name to copy "
read file
echo "please proide teh destination file name"
read file2
cp $file $file2
echo "file copied successfully"
