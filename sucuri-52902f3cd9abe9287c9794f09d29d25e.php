<?php
/* Sucuri integrity monitor
 * Integrity checking and server side scanning.
 *
 * Copyright (C) 2010, 2011, 2012 Sucuri, LLC
 * http://sucuri.net
 * Do not distribute or share.
 */

$MYMONITOR = "monitor18";
$my_sucuri_encoding = "



LyogU3VjdXJpIGludGVncml0eSBtb25pdG9yIC4gCiAqIENvbm5lY3RzIGJhY2sgaG9tZS4KICog
Q29weXJpZ2h0IChDKSAyMDEwLTIwMTMgU3VjdXJpLCBMTEMKICogRG8gbm90IGRpc3RyaWJ1dGUg
b3Igc2hhcmUuCiAqLwoKCiRTVUNVUklQV0QgPSAiNTM1ZTI2ZWIwZjMzMjRlODA1NmZlNjk1NDk3
NmIwNGM2MmViOTc3ZjJjYzUxIjsKCgppZihpc3NldCgkX0dFVFsndGVzdCddKSkKewogICAgZWNo
byAiT0s6IFN1Y3VyaTogRm91bmRcbiI7CiAgICBleGl0KDApOwp9CgoKCi8qIFZhbGlkIGFyZ3Vt
ZW50LiAqLwppZighaXNzZXQoJF9HRVRbJ3J1biddKSkKewogICAgZXhpdCgwKTsKfQoKCi8qIE11
c3QgaGF2ZSBhbiBJUCBhZGRyZXNzLiAqLwppZighaXNzZXQoJF9TRVJWRVJbJ1JFTU9URV9BRERS
J10pKQp7CiAgICBleGl0KDApOwp9Cgokb3JpZ3JlbW90ZWlwID0gJF9TRVJWRVJbJ1JFTU9URV9B
RERSJ107CgovKiBJZiBjb21pbmcgZnJvbSBjbG91ZGZsYXJlOiAqLwppZihpc3NldCgkX1NFUlZF
UlsnSFRUUF9DRl9DT05ORUNUSU5HX0lQJ10pKQp7CiAgICAkX1NFUlZFUlsnUkVNT1RFX0FERFIn
XSA9ICRfU0VSVkVSWydIVFRQX0NGX0NPTk5FQ1RJTkdfSVAnXTsKfQovKiBDbG91ZFByb3h5IGhl
YWRlcnMuICovCmVsc2UgaWYoaXNzZXQoJF9TRVJWRVJbJ0hUVFBfWF9TVUNVUklfQ0xJRU5USVAn
XSkpCnsKICAgICRfU0VSVkVSWydSRU1PVEVfQUREUiddID0gJF9TRVJWRVJbJ0hUVFBfWF9TVUNV
UklfQ0xJRU5USVAnXTsKfQovKiBNb3JlIGdhdGV3YXkgcmVxdWVzdHMuICovCmVsc2UgaWYoaXNz
ZXQoJF9TRVJWRVJbJ0hUVFBfWF9PUklHX0NMSUVOVF9JUCddKSkKewogICAgJF9TRVJWRVJbJ1JF
TU9URV9BRERSJ10gPSAkX1NFUlZFUlsnSFRUUF9YX09SSUdfQ0xJRU5UX0lQJ107Cn0KZWxzZSBp
Zihpc3NldCgkX1NFUlZFUlsnSFRUUF9DTElFTlRfSVAnXSkpCnsKICAgICRfU0VSVkVSWydSRU1P
VEVfQUREUiddID0gJF9TRVJWRVJbJ0hUVFBfQ0xJRU5UX0lQJ107Cn0KLyogUHJveHkgcmVxdWVz
dHMuICovCmVsc2UgaWYoaXNzZXQoJF9TRVJWRVJbJ0hUVFBfVFJVRV9DTElFTlRfSVAnXSkpCnsK
ICAgICRfU0VSVkVSWydSRU1PVEVfQUREUiddID0gJF9TRVJWRVJbJ0hUVFBfVFJVRV9DTElFTlRf
SVAnXTsKfQovKiBQcm94eSByZXF1ZXN0cy4gKi8KZWxzZSBpZihpc3NldCgkX1NFUlZFUlsnSFRU
UF9YX1JFQUxfSVAnXSkpCnsKICAgICRfU0VSVkVSWydSRU1PVEVfQUREUiddID0gJF9TRVJWRVJb
J0hUVFBfWF9SRUFMX0lQJ107Cn0KLyogTW9yZSBnYXRld2F5IHJlcXVlc3RzLiAqLwplbHNlIGlm
KGlzc2V0KCRfU0VSVkVSWydIVFRQX1hfRk9SV0FSREVEX0ZPUiddKSkKewogICAgJF9TRVJWRVJb
J1JFTU9URV9BRERSJ10gPSAkX1NFUlZFUlsnSFRUUF9YX0ZPUldBUkRFRF9GT1InXTsKfQoKCiRt
eWlwbGlzdCA9IGFycmF5KAonOTcuNzQuMTI3LjE3MScsCic2OS4xNjQuMjAzLjE3MicsCicxNzMu
MjMwLjEyOC4xMzUnLAonNjYuMjI4LjM0LjQ5JywKJzY2LjIyOC40MC4xODUnLAonNTAuMTE2LjMu
MTcxJywKJzUwLjExNi4zNi45MicsCicxOTguNTguOTYuMjEyJywKJzUwLjExNi42My4yMjEnLAon
MTkyLjE1NS45Mi4xMTInLAonMTkyLjgxLjEyOC4zMScsCicxOTguNTguMTA2LjI0NCcsCicyNjAw
OjNjMDA6OmYwM2M6OTFmZjpmZWFlOmUxMDQnLAonMjYwMDozYzAyOjpmMDNjOjkxZmY6ZmVkZjo1
OGM2JywKJzI2MDA6M2MwMjo6ZjAzYzo5MWZmOmZlZGY6NTgzNScsCicyNjAwOjNjMDM6OmYwM2M6
OTFmZjpmZWRmOjZhN2EnLAonZmU4MDo6ZmNmZDphZGZmOmZlZTY6ODA4NycsCicyNjAwOjNjMDM6
OmYwM2M6OTFmZjpmZTcwOjM2Y2UnLAonMjYwMDozYzAyOjpmMDNjOjkxZmY6ZmU3MDpmMTJkJywK
JzI2MDA6M2MwMTo6ZjAzYzo5MWZmOmZlNzA6NTJiYicsCic1MC4xMTYuMzYuOTMnLAoiMTkyLjE1
NS45NS4xMzkiLAoiMjYwMDozYzAyOjpmMDNjOjkxZmY6ZmU2OTo0YjY2IiwKIjI2MDA6M2MwMDo6
ZjAzYzo5MWZmOmZlNzA6NTIxMyIsCiIyNjAwOjNjMDM6OmYwM2M6OTFmZjpmZWRiOmI5Y2UiLAoi
MjMuMjM5LjkuMjI3IiwKIjE5OC41OC4xMTIuMTAzIiwKIjE5Mi4xNTUuOTQuNDMiLAoiMTYyLjIx
Ni4xNi4zMyIsCiIyNjAwOjNjMDA6OmYwM2M6OTFmZjpmZTZlOmEwNDYiLAoiMjYwMDozYzAyOjpm
MDNjOjkxZmY6ZmU2ZTphMGRkIiwKIjI2MDA6M2MwMzo6ZjAzYzo5MWZmOmZlNmU6YTBhYyIsCik7
CgoKJGlwbWF0Y2hlcyA9IDA7Cgpmb3JlYWNoKCRteWlwbGlzdCBhcyAkbXlpcCkKewogICAgaWYo
c3RycG9zKCRfU0VSVkVSWydSRU1PVEVfQUREUiddLCAkbXlpcCkgIT09IEZBTFNFKQogICAgewog
ICAgICAgICRpcG1hdGNoZXMgPSAxOwogICAgICAgIGJyZWFrOwogICAgfQogICAgaWYoc3RycG9z
KCRvcmlncmVtb3RlaXAsICRteWlwKSAhPT0gRkFMU0UpCiAgICB7CiAgICAgICAgJGlwbWF0Y2hl
cyA9IDE7CiAgICAgICAgYnJlYWs7CiAgICB9Cn0KCgppZigkaXBtYXRjaGVzID09IDApCnsKICAg
IGVjaG8gIkVSUk9SOiBJbnZhbGlkIElQIEFkZHJlc3NcbiI7CiAgICBleGl0KDApOwp9CgoKLyog
VmFsaWQga2V5LiAqLwppZighaXNzZXQoJF9QT1NUWydzc2NyZWQnXSkpCnsKICAgIGVjaG8gIkVS
Uk9SOiBJbnZhbGlkIGFyZ3VtZW50XG4iOwogICAgZXhpdCgwKTsKfQoKCi8qIENvbm5lY3QgYmFj
ayB0byBnZXQgd2hhdCB0byBydW4uICovCmlmKCFmdW5jdGlvbl9leGlzdHMoJ2N1cmxfZXhlYycp
IHx8IGlzc2V0KCRfR0VUWydub2N1cmwnXSkpCnsKICAgICRwb3N0ZGF0YSA9IGh0dHBfYnVpbGRf
cXVlcnkoCiAgICAgICAgICAgIGFycmF5KAogICAgICAgICAgICAgICAgJ3AnID0+ICRTVUNVUklQ
V0QsCiAgICAgICAgICAgICAgICAncScgPT4gJF9QT1NUWydzc2NyZWQnXSwKICAgICAgICAgICAg
ICAgICkKICAgICAgICAgICAgKTsKCiAgICAkb3B0cyA9IGFycmF5KCdodHRwJyA9PgogICAgICAg
ICAgICBhcnJheSgKICAgICAgICAgICAgICAgICdtZXRob2QnICA9PiAnUE9TVCcsCiAgICAgICAg
ICAgICAgICAnaGVhZGVyJyAgPT4gJ0NvbnRlbnQtdHlwZTogYXBwbGljYXRpb24veC13d3ctZm9y
bS11cmxlbmNvZGVkJywKICAgICAgICAgICAgICAgICdjb250ZW50JyA9PiAkcG9zdGRhdGEKICAg
ICAgICAgICAgICAgICkKICAgICAgICAgICAgKTsKCiAgICAkY29udGV4dCA9IHN0cmVhbV9jb250
ZXh0X2NyZWF0ZSgkb3B0cyk7CiAgICAkbXlfc3VjdXJpX2VuY29kaW5nID0gZmlsZV9nZXRfY29u
dGVudHMoImh0dHBzOi8vJE1ZTU9OSVRPUi5zdWN1cmkubmV0L2ltb25pdG9yIiwgZmFsc2UsICRj
b250ZXh0KTsKCiAgICBpZihzdHJuY21wKCRteV9zdWN1cmlfZW5jb2RpbmcsICJXT1JLRUQ6Iiw3
KSA9PSAwKQogICAgewogICAgfQogICAgZWxzZQogICAgewogICAgICAgIGVjaG8gIkVSUk9SOiBV
bmFibGUgdG8gY29tcGxldGUgKG1pc3NpbmcgY3VybCBzdXBwb3J0IGFuZCBmaWxlX2dldCBmYWls
ZWQpLiBQbGVhc2UgY29udGFjdCBzdXBwb3J0QHN1Y3VyaS5uZXQgZm9yIGd1aWRhbmNlLlxuIjsK
ICAgICAgICBleGl0KDEpOwogICAgfQp9CgplbHNlCnsKCiAgICAkY2ggPSBjdXJsX2luaXQoKTsK
ICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9VUkwsICJodHRwczovLyRNWU1PTklUT1Iuc3Vj
dXJpLm5ldC9pbW9uaXRvciIpOwogICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRS
QU5TRkVSLCB0cnVlKTsKICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NULCB0cnVlKTsK
ICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NURklFTERTLCAicD0kU1VDVVJJUFdEJnE9
Ii4kX1BPU1RbJ3NzY3JlZCddKTsgCiAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfU1NMX1ZF
UklGWVBFRVIsIGZhbHNlKTsKCiAgICAkbXlfc3VjdXJpX2VuY29kaW5nID0gY3VybF9leGVjKCRj
aCk7CiAgICBjdXJsX2Nsb3NlKCRjaCk7CgogICAgaWYoc3RybmNtcCgkbXlfc3VjdXJpX2VuY29k
aW5nLCAiV09SS0VEOiIsNykgPT0gMCkKICAgIHsKICAgIH0KICAgIGVsc2UKICAgIHsKICAgICAg
ICBpZigkbXlfc3VjdXJpX2VuY29kaW5nID09IE5VTEwgfHwgc3RybGVuKCRteV9zdWN1cmlfZW5j
b2RpbmcpIDwgMykKICAgICAgICB7CiAgICAgICAgICAgICRteV9zdWN1cmlfZW5jb2RpbmcgPSAi
eDIzNTEiOwogICAgICAgIH0KICAgICAgICBlY2hvICJFUlJPUjogVW5hYmxlIHRvIGNvbm5lY3Qg
YmFjayB0byBTdWN1cmkgKGVycm9yOiAkbXlfc3VjdXJpX2VuY29kaW5nKS4gUGxlYXNlIGNvbnRh
Y3Qgc3VwcG9ydEBzdWN1cmkubmV0IGZvciBndWlkYW5jZS5cbiI7CiAgICAgICAgZXhpdCgxKTsK
ICAgIH0KfQoKCiRteV9zdWN1cmlfZW5jb2RpbmcgPSAgYmFzZTY0X2RlY29kZSgKICAgICAgICAg
ICAgICAgICAgICAgICBzdWJzdHIoJG15X3N1Y3VyaV9lbmNvZGluZywgNykpOwoKCmV2YWwoCiAg
ICAkbXlfc3VjdXJpX2VuY29kaW5nCiAgICApOwoKCg==

";

/* Encoded to avoid that it gets flagged by AV products or even ourselves :) */
$tempb64 =  
           base64_decode(
                          $my_sucuri_encoding);

eval(  $tempb64 
      );
exit(0); ?>    
    
