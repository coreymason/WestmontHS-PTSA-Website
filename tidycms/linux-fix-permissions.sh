#!/bin/bash
PHPU=$1
CDIR=${PWD##*/}
usage(){
	echo "Usage: $0 username"
	exit 1
}

echo "TidyCMS permission fix\n"

if [ "$#" -ne 1 ]
then
	usage
fi

if [ $CDIR != "tidycms" ]
then
	echo "Error: Wrong directory. Curent dir is $CDIR. Go to ./tidycms/ directory"
	usage
fi

find .. -type f -name "*.html" -not -path "../tidycms*/*" -exec chmod -v 0664 {} \;
find .. -type f -name "*.html" -not -path "../tidycms*/*" -exec chgrp -v $PHPU {} \;
find .. -type d -not -path "../tidycms*" -exec chmod -v 0775 {} \;
find .. -type d -not -path "../tidycms*" -exec chgrp -v $PHPU {} \;
mkdir -p files
find . -type f -not -path '*/\.*' -exec chmod 0664 {} \;
find . -type f -not -path '*/\.*' -exec chgrp $PHPU {} \;
find . -type d -not -path '*/\.*' -name "files" -exec chmod -Rv 0775 {} \;
find . -type d -not -path '*/\.*' -name "files" -exec chgrp -Rv $PHPU {} \;
chmod -v 0775 .

echo "\nPermissions fixed! Ready for TidyCMS!"
echo "tidy-chmod-eos"
