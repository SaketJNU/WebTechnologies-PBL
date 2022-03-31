echo "ENTER YOUR AGE"
read age
if [ "$age" -ge 18 ]; then
	echo "you are eligible to vote"
else
	echo "you are not eligible to vote"
fi

