#!/bin/bash

echo "Enter an Even Number :"
read n

i=$(expr $n % 2)

if [ $i -ne 0 ]
then

    echo "Its not Even!"

fi

