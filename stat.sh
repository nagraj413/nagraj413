#!/bin/bash
a=10;
b=51;
if [ $a == $b ]
then 
echo "a, b are equal number"
elif [ $a -lt $b ]
then 
echo "a is less then b"
else 
echo "b is greater then a"
fi
