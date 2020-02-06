#!/bin/bash

ESC_SEQ="\x1b["
COL_RESET=$ESC_SEQ"39;49;00m"
COL_RED=$ESC_SEQ"0;31m"
COL_GREEN=$ESC_SEQ"0;32m"
COL_YELLOW=$ESC_SEQ"0;33m"

changed_files="$(git diff-tree -r --name-only --no-commit-id HEAD@{1} HEAD)"

check_run() {
    echo "$changed_files" | grep --quiet "$1" && echo " * changes detected in $1" && echo " * running $2" && eval "$2"
}
 
# Example usage
# In this example it's used to run `composer install` if composer.lock changed.
check_run composer.lock "composer install"
exit 0