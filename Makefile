all:	locales/fr/LC_MESSAGES/messages.mo

messages.pot: ../*/*.php
	[ -r $@ ] || touch $@
	xgettext --package-name=LQDNCampaign --package-version=2012.1 --force-po -o $@ --keyword=__ --keyword=_  -L PHP --from-code=UTF-8 -j $^

locales/%/LC_MESSAGES/messages.po: messages.pot
	msgmerge -v -U $@ $^

locales/fr/LC_MESSAGES/messages.mo: locales/fr/LC_MESSAGES/messages.po
	msgfmt $^ -o $@

