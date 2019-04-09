#!/bin/bash

realpath() {
  OURPWD=$PWD
  cd "$(dirname "$0")"
  LINK=$(readlink "$(basename "$0")")
  while [ "$LINK" ]; do
    cd "$(dirname "$LINK")"
    LINK=$(readlink "$(basename "$0")")
  done
  REALPATH="$PWD/$(basename "$0")"
  cd "$OURPWD"
  echo "$REALPATH"
}

SCRIPT=$(realpath)
SCRIPTPATH=$(dirname "$SCRIPT")

read -r -p "Master pullen? [y/n] " response
if [[ "$response" =~ ^([yY][eE][sS]|[yY])+$ ]]
then
    echo "$(tput setaf 1)Pullt den neuesten Stand von Develop...$(tput sgr0)"
    git pull origin master
    cd $SCRIPTPATH
fi

echo "$(tput setaf 1)Starte Vagrant...$(tput sgr0)"
cd $SCRIPTPATH/playground
vagrant up
