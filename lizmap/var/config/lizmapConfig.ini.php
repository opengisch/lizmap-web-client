;Services
;list the different map services (servers, generic parameters, etc.)
[services]
wmsServerURL="http://127.0.0.1/cgi-bin/qgis_mapserv.fcgi"
defaultRepository=montpellier
cacheStorageType=file
;cacheStorageType=sqlite => store cached images in one sqlite file per repo/project/layer
;cacheStorageType=file => store cached images in one folder per repo/project/layer. The root folder is /tmp/
cacheExpiration=0
; default cache expiration : the default time to live of data, in seconds.
; 0 means no expiration, max : 2592000 seconds (30 days)
proxyMethod=php
; php -> use the built in file_get_contents method
; curl-> use curl. It must be installed.
debugMode=0
; debug mode
; on = print debug messages in lizmap/var/log/messages.log
; off = no lizmap debug messages
cacheRootDirectory="/tmp/"
; cache root directory where cache files will be stored
; must be writable
allowUserAccountRequests=off
adminContactEmail="none"

;Repositories
;Each repository must be set in a separate section
;The section name must begin with the prefix "repository:"
; Example of public repository
[repository:montpellier]
label="LizMap Demo"
path="../install/qgis/"


; Example of a repository wich will have access control
[repository:intranet]
label="Lizmap Demo - Intranet"
path="../install/qgis_intranet/"



















