pwd
date
cal
echo "what is your new file name "
read file
echo "i will create new file with name $file with "
touch ${file}.sh
echo "what is new dir name "
read dir
echo "new dir is created with given name $dir"
mkdir $dir
echo "add content to your file"
read content
echo $content > $file
cat $file
