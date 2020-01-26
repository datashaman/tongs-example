default:

local-permalinks:
	cd vendor/datashaman; rm -rf tongs-permalinks; ln -s ../../../permalinks tongs-permalinks

remote-permalinks:
	cd vendor/datashaman; rm tongs-permalinks; cd ../..; composer install

local-tongs:
	cd vendor/datashaman; rm -rf tongs; ln -s ../../../tongs .

remote-tongs:
	cd vendor/datashaman; rm tongs; cd ../..; composer install
