#!/bin/sh

if (( $# == 5)); then

    # Update a person by id
    curl -H "Content-Type: application/json" \
         -X PUT \
         -d "{\"firstname\":\"${2}\",\"lastname\":\"${3}\",\"birthday\":\"${4}\",\"gender\":\"${5}\"}" \
         "http://localhost:8080/persons/${1}"
    echo ""

else

    # Error
    echo "You need to provide an id and valid data to update a person"
    echo "Command usage:"
    echo "sh ./scripts/persons-put.sh [id] [firstname] [lastname] [birthday] [gender]"

fi