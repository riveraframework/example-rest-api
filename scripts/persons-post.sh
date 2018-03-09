#!/bin/sh

if (( $# == 4)); then

    # Create a person
    curl -H "Content-Type: application/json" \
         -X POST \
         -d "{\"firstname\":\"${1}\",\"lastname\":\"${2}\",\"birthday\":\"${3}\",\"gender\":\"${4}\"}" \
         "http://localhost:8080/persons"
    echo ""

else

    # Error
    echo "You need to provide valid data to create a person"
    echo "Command usage:"
    echo "sh ./scripts/persons-post.sh [firstname] [lastname] [birthday] [gender]"

fi