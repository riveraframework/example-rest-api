#!/bin/sh

if [ -n "${1}" ]; then

    # Get persons by id
    curl -G "http://localhost:8080/persons/${1}"
    echo ""

else

    # Get all persons
    curl -G "http://localhost:8080/persons"
    echo ""

fi