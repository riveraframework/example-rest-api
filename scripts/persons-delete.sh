#!/bin/sh

if (( $# == 1)); then

    # Delete a person by id
    curl -X DELETE \
         "http://localhost:8080/persons/${1}"
    echo ""

else

    # Error
    echo "You need to provide a valid id to delete a person"
    echo "Command usage:"
    echo "sh ./scripts/persons-delete.sh [id]"

fi