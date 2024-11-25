#!/bin/bash

#=================================================
# COMMON VARIABLES AND CUSTOM HELPERS
#=================================================

_validate_color() {
    # Remove eventual '#' prefix from color
    color=${color#"#"}
    # Check if the format is valid, put #555555 instead
    if [[ ! "$color" =~ ^[A-Fa-f0-9]{6}$ ]]; then
        color=555555
    fi
    echo "$color"
}
