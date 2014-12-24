#!/bin/bash
PHPU=$USER
CDIR=${PWD##*/}
usage(){
	echo "Usage: $0"
	exit 1
}

echo "TidyCMS permission fix\n"

if [ $CDIR != "tidycms" ]
then
	echo "Error: Wrong directory. Curent dir is $CDIR. Go to ./tidycms/ directory"
	usage
fi

find .. -type f -name "*.html" -not -path "../tidycms/*" -exec chmod -v 0644 {} \;
find .. -type f -name "*.html" -not -path "../tidycms/*" -exec chgrp -v $PHPU {} \;
find .. -type d -not -path "../tidycms/*" -exec chmod -v 0755 {} \;
find .. -type d -not -path "../tidycms/*" -exec chgrp -v $PHPU {} \;

find . -type f -exec chmod 0644 {} \;
find . -type f -exec chgrp $PHPU {} \;
find . -type d -exec chmod 0755 {} \;
find . -type d -exec chgrp $PHPU {} \;

echo "\nPermissions reset"
echo "tidy-chmod-eos"
