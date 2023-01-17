#!/bin/bash
msgfmt -c -v -o locale/fr_FR/LC_MESSAGES/main.mo locale/fr_FR/LC_MESSAGES/main.po
xgettext -d main -s -o locale/fr_FR/LC_MESSAGES/main.pot `find . -iname '*.php'`
#msginit -l fr_FR -o locale/fr_FR/LC_MESSAGES/main.po -i locale/fr_FR/LC_MESSAGES/main.pot
msgmerge --no-location -s -U locale/fr_FR/LC_MESSAGES/main.po locale/fr_FR/LC_MESSAGES/main.pot
msgfmt -c -v -o locale/fr_FR/LC_MESSAGES/main.mo locale/fr_FR/LC_MESSAGES/main.po
