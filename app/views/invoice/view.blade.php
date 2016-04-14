<?php 
class MYPDF extends TCPDF {
	public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', '', 8, false);
		$imgdata = base64_decode('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
ADUAMQAgAFAAQwBMACAANgAAAAAAD3ByaW50UHJvb2ZTZXR1cE9iamMAAAARAEEAagB1AHMAdABl
ACAAZABlACAAcAByAHUAZQBiAGEAAAAAAApwcm9vZlNldHVwAAAAAQAAAABCbHRuZW51bQAAAAxi
dWlsdGluUHJvb2YAAAAJcHJvb2ZDTVlLADhCSU0EOwAAAAACLQAAABAAAAABAAAAAAAScHJpbnRP
dXRwdXRPcHRpb25zAAAAFwAAAABDcHRuYm9vbAAAAAAAQ2xicmJvb2wAAAAAAFJnc01ib29sAAAA
AABDcm5DYm9vbAAAAAAAQ250Q2Jvb2wAAAAAAExibHNib29sAAAAAABOZ3R2Ym9vbAAAAAAARW1s
RGJvb2wAAAAAAEludHJib29sAAAAAABCY2tnT2JqYwAAAAEAAAAAAABSR0JDAAAAAwAAAABSZCAg
ZG91YkBv4AAAAAAAAAAAAEdybiBkb3ViQG/gAAAAAAAAAAAAQmwgIGRvdWJAb+AAAAAAAAAAAABC
cmRUVW50RiNSbHQAAAAAAAAAAAAAAABCbGQgVW50RiNSbHQAAAAAAAAAAAAAAABSc2x0VW50RiNQ
eGxAcsAAAAAAAAAAAAp2ZWN0b3JEYXRhYm9vbAEAAAAAUGdQc2VudW0AAAAAUGdQcwAAAABQZ1BD
AAAAAExlZnRVbnRGI1JsdAAAAAAAAAAAAAAAAFRvcCBVbnRGI1JsdAAAAAAAAAAAAAAAAFNjbCBV
bnRGI1ByY0BZAAAAAAAAAAAAEGNyb3BXaGVuUHJpbnRpbmdib29sAAAAAA5jcm9wUmVjdEJvdHRv
bWxvbmcAAAAAAAAADGNyb3BSZWN0TGVmdGxvbmcAAAAAAAAADWNyb3BSZWN0UmlnaHRsb25nAAAA
AAAAAAtjcm9wUmVjdFRvcGxvbmcAAAAAADhCSU0D7QAAAAAAEAEsAAAAAQACASwAAAABAAI4QklN
BCYAAAAAAA4AAAAAAAAAAAAAP4AAADhCSU0EDQAAAAAABAAAAHg4QklNBBkAAAAAAAQAAAAeOEJJ
TQPzAAAAAAAJAAAAAAAAAAABADhCSU0nEAAAAAAACgABAAAAAAAAAAI4QklNA/UAAAAAAEgAL2Zm
AAEAbGZmAAYAAAAAAAEAL2ZmAAEAoZmaAAYAAAAAAAEAMgAAAAEAWgAAAAYAAAAAAAEANQAAAAEA
LQAAAAYAAAAAAAE4QklNA/gAAAAAAHAAAP////////////////////////////8D6AAAAAD/////
////////////////////////A+gAAAAA/////////////////////////////wPoAAAAAP//////
//////////////////////8D6AAAOEJJTQQIAAAAAAAQAAAAAQAAAkAAAAJAAAAAADhCSU0EHgAA
AAAABAAAAAA4QklNBBoAAAAAA2UAAAAGAAAAAAAAAAAAAACWAAAAKgAAABgAbABvAGcAaQBuAC0A
ZgBhAGMAdAB1AHIAYQAtAHYAaQByAHQAdQBhAGwALQBCAE4AAAABAAAAAAAAAAAAAAAAAAAAAAAA
AAEAAAAAAAAAAAAAACoAAACWAAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAEAAA
AAEAAAAAAABudWxsAAAAAgAAAAZib3VuZHNPYmpjAAAAAQAAAAAAAFJjdDEAAAAEAAAAAFRvcCBs
b25nAAAAAAAAAABMZWZ0bG9uZwAAAAAAAAAAQnRvbWxvbmcAAACWAAAAAFJnaHRsb25nAAAAKgAA
AAZzbGljZXNWbExzAAAAAU9iamMAAAABAAAAAAAFc2xpY2UAAAASAAAAB3NsaWNlSURsb25nAAAA
AAAAAAdncm91cElEbG9uZwAAAAAAAAAGb3JpZ2luZW51bQAAAAxFU2xpY2VPcmlnaW4AAAANYXV0
b0dlbmVyYXRlZAAAAABUeXBlZW51bQAAAApFU2xpY2VUeXBlAAAAAEltZyAAAAAGYm91bmRzT2Jq
YwAAAAEAAAAAAABSY3QxAAAABAAAAABUb3AgbG9uZwAAAAAAAAAATGVmdGxvbmcAAAAAAAAAAEJ0
b21sb25nAAAAlgAAAABSZ2h0bG9uZwAAACoAAAADdXJsVEVYVAAAAAEAAAAAAABudWxsVEVYVAAA
AAEAAAAAAABNc2dlVEVYVAAAAAEAAAAAAAZhbHRUYWdURVhUAAAAAQAAAAAADmNlbGxUZXh0SXNI
VE1MYm9vbAEAAAAIY2VsbFRleHRURVhUAAAAAQAAAAAACWhvcnpBbGlnbmVudW0AAAAPRVNsaWNl
SG9yekFsaWduAAAAB2RlZmF1bHQAAAAJdmVydEFsaWduZW51bQAAAA9FU2xpY2VWZXJ0QWxpZ24A
AAAHZGVmYXVsdAAAAAtiZ0NvbG9yVHlwZWVudW0AAAARRVNsaWNlQkdDb2xvclR5cGUAAAAATm9u
ZQAAAAl0b3BPdXRzZXRsb25nAAAAAAAAAApsZWZ0T3V0c2V0bG9uZwAAAAAAAAAMYm90dG9tT3V0
c2V0bG9uZwAAAAAAAAALcmlnaHRPdXRzZXRsb25nAAAAAAA4QklNBCgAAAAAAAwAAAACP/AAAAAA
AAA4QklNBBEAAAAAAAEBADhCSU0EFAAAAAAABAAAAAQ4QklNBAwAAAAACD8AAAABAAAAKgAAAJYA
AACAAABLAAAACCMAGAAB/9j/7QAMQWRvYmVfQ00AAv/uAA5BZG9iZQBkgAAAAAH/2wCEAAwICAgJ
CAwJCQwRCwoLERUPDAwPFRgTExUTExgRDAwMDAwMEQwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM
DAwBDQsLDQ4NEA4OEBQODg4UFA4ODg4UEQwMDAwMEREMDAwMDAwRDAwMDAwMDAwMDAwMDAwMDAwM
DAwMDAwMDAwMDP/AABEIAJYAKgMBIgACEQEDEQH/3QAEAAP/xAE/AAABBQEBAQEBAQAAAAAAAAAD
AAECBAUGBwgJCgsBAAEFAQEBAQEBAAAAAAAAAAEAAgMEBQYHCAkKCxAAAQQBAwIEAgUHBggFAwwz
AQACEQMEIRIxBUFRYRMicYEyBhSRobFCIyQVUsFiMzRygtFDByWSU/Dh8WNzNRaisoMmRJNUZEXC
o3Q2F9JV4mXys4TD03Xj80YnlKSFtJXE1OT0pbXF1eX1VmZ2hpamtsbW5vY3R1dnd4eXp7fH1+f3
EQACAgECBAQDBAUGBwcGBTUBAAIRAyExEgRBUWFxIhMFMoGRFKGxQiPBUtHwMyRi4XKCkkNTFWNz
NPElBhaisoMHJjXC0kSTVKMXZEVVNnRl4vKzhMPTdePzRpSkhbSVxNTk9KW1xdXl9VZmdoaWprbG
1ub2JzdHV2d3h5ent8f/2gAMAwEAAhEDEQA/APVVifWD6z09EtoqfQ643S5xBDdrQY3cO3v/AJC2
1gfW76v2dYw2Oxo+14xJrBMBzXfTr3fve32JKd1jmvaHt1a4Ag+RUl51j9d+uHTam4ZosIpG1vq0
ucQBw3f+c1bv1X651/qGbZV1DH20NYXep6Zr2ukbW+76W9JT1CSSSSn/0PVVifWj6wjouI01tD8q
8kUtdwAPp2P/AKsrbXEf4xcS4uxMwAmoB1Tj2a6d7f8AP9ySnPZk/Xm+g9UY/INH0w5u0Aj95uP+
cz/rS6X6pfWV/WKn4+UAMygBxLdA9n0fU2/mua76ajifXXobOmV2PeWXV1hpxQ07tzRGxmnp7f3X
bli/UKi2/rGTnBuylrHAxxuscHNrH9lqSnvkkkklP//R9VWR1/rHRsJjMPqgNjMoQWBu4BoP84/+
q79z9ItdcD/jF/5QxP8AiT/1RSU6zfqH9X7y3IptuNFgDmNY9pYQdRtfsc/b/bV3ofVOg+vZ0bpb
TWcaTEQ10HbY5ryS6x2799cv0Drub9Xs39mdTa5uKXCQdTUXa+rXH0qXfSft/rs/4RfUxzXfWm5z
SHNc24tI4ILgkp9DSSSSU//S9VXF/XvpfUMzMw34mO+9pYayWDdDt0++PoN1+m5douf+tQ+shFH7
Fn0/d63p7d86bJ3/AJn9RJSfrn1cx+sYTK3xXl0tim4djH0H/vVOXO/U3ovU8HrtrsrHfUymtzHW
Eewklu303/Rs/sIO3/GF/wAP97Fs/Vhv1sGa89WLvsuw/wA6WzvkbPT2e5JT1CSSSSn/0/VVy313
69ldOrpxMNxqtyAXPtH0gwe2GH81z/3l1K4f/GO+jfhM2n7RDyXdtnt9v+ekpqV/V36521tsF9gD
wHQcgzrr7vctv6rdI+sWDmWW9SvLscs2it1hsl0ja7Wdm1YdHRvryaazVZe2vaNjftAbDY9o2+r7
VufVfp/1oxc2x/VbXuxjXAZZb6svkbSz3P2bfckp6hJJJJT/AP/U9VXP/W36uWdZortxSG5WPIaH
aB7T+Zu/Nd+4ugXO/XL6wXdJxa6MU7crJmH87GD6Tx/LdPsSU88zpv1/rYGMN4YwbWgXs0A/66tv
6rY31rqzbHdXe/7MWQG2va8l8jb6e1z9v5y5voLeoU/WjC+1veL7oe4vcS4ssYXjfqfpt/Mcur+r
v1rHWcy/Fso+zvrBfUJkloO1zX6D3t3NSU9Ckkkkp//V9VXHf4wemX3VUdQqaXsoBZcBrtaTuZZ/
V3fSXYpiAQQRIOhBSU+Vn6wPd1mjqz6QbKWMDmboDnMZ6W7j2td9Latv6hYGTdnX9WtBbVtcxrog
Oe8hz9v8lm1dK76rfV913rHBr3zMCQ3/ALaa70v+gtOuuupja62hjGiGsaAAAOzWhJTJJJJJT//W
6P8Axg9Sy6BjYdFhqquDn27TBdBDWtJH5i5novT8jq99uLVe6u9tRsqDidri0tBrcfzfa5bn+Mb+
mYf/ABb/APqgsj6pWmvr2O0O2i4PqLvDexwb/wBPYkpz8qvPw73Y+V6lVzDDmOJn/wAyahevf/pH
feV6hldMwPrF05hy2bb2yz1G6Prsadlrf6vqN/m3LzrrXR8jo+acS9zXyN7HtPLSSGuLfpM4+ikp
2/qJ1PMHVfsTrHPx7mOJY4kgOaN+9k/RXoS8z+o3/iip/qWf9SV6Ykp//9fZ/wAY39Mw/wDi3/8A
VBcz0y/7P1LFvmPSuY4/AOErp/8AGO132nCfHtLHgHtILf71xySn02/qFfROp5rLdacuv7XjskDd
c2Kb6Gbv8Jd+itXB9ZOTfd9vyyBfkkl9e4EiPo7WhznMq2+1m9aP1p+sP7RfjU47gWY9YL7BybHt
b6ga7+R9Bc8SSZOpPdJTv/Ub/wAUVP8AUs/6kr0xeafUVrj9YayBIbXYXeQ27f8Avy9LSU//0PQu
v/sT7F/lrYMfd7d07t3/AAXpfpd3/Frmdn+Lf/SO/wDZj/yK8OSSU+47P8W/+kd/7Mf+RS2f4t/9
I7/2Y/8AIrw5JJT9H/VsfVkNtHQy0u09Unf6kdv5/wDSen/0Ftr5VSSU/wD/2QA4QklNBCEAAAAA
AFUAAAABAQAAAA8AQQBkAG8AYgBlACAAUABoAG8AdABvAHMAaABvAHAAAAATAEEAZABvAGIAZQAg
AFAAaABvAHQAbwBzAGgAbwBwACAAQwBTADYAAAABADhCSU0EBgAAAAAABwAIAAAAAQEA/+EPBmh0
dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0w
TXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRh
LyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4zLWMwMTEgNjYuMTQ1NjYxLCAyMDEyLzAyLzA2
LTE0OjU2OjI3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3Jn
LzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0i
IiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRw
Oi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMu
YWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNv
bS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9z
VHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2
IChXaW5kb3dzKSIgeG1wOkNyZWF0ZURhdGU9IjIwMTUtMTEtMjdUMjE6MDc6MTItMDQ6MDAiIHht
cDpNb2RpZnlEYXRlPSIyMDE2LTAxLTA1VDEyOjI0OjM1LTA0OjAwIiB4bXA6TWV0YWRhdGFEYXRl
PSIyMDE2LTAxLTA1VDEyOjI0OjM1LTA0OjAwIiBkYzpmb3JtYXQ9ImltYWdlL2pwZWciIHBob3Rv
c2hvcDpMZWdhY3lJUFRDRGlnZXN0PSI4NUVFRDJFQTEyRTNGRENDNEJBQ0ZBNkI4MTFBOEQ3MCIg
cGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBQjY0RjQ0
QkM4QjNFNTExOUY5NEJDOUY1OUYxQ0JCNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo2RDY2
OEUwNTM4QUZFNTExQjQ0QkU4MEEwQjBEODIxMiIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4
bXAuZGlkOjZENjY4RTA1MzhBRkU1MTFCNDRCRTgwQTBCMEQ4MjEyIj4gPHhtcE1NOkhpc3Rvcnk+
IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJ
RD0ieG1wLmlpZDo2RDY2OEUwNTM4QUZFNTExQjQ0QkU4MEEwQjBEODIxMiIgc3RFdnQ6d2hlbj0i
MjAxNS0xMS0yN1QyMTowNzoxMi0wNDowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhv
dG9zaG9wIENTNiAoV2luZG93cykiLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNvbnZlcnRlZCIg
c3RFdnQ6cGFyYW1ldGVycz0iZnJvbSBpbWFnZS9wbmcgdG8gaW1hZ2UvanBlZyIvPiA8cmRmOmxp
IHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NkU2NjhFMDUz
OEFGRTUxMUI0NEJFODBBMEIwRDgyMTIiIHN0RXZ0OndoZW49IjIwMTUtMTItMzBUMTY6NTg6MDUt
MDQ6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3Mp
IiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6
aW5zdGFuY2VJRD0ieG1wLmlpZDpBQjY0RjQ0QkM4QjNFNTExOUY5NEJDOUY1OUYxQ0JCNiIgc3RF
dnQ6d2hlbj0iMjAxNi0wMS0wNVQxMjoyNDozNS0wNDowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0i
QWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6
U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4
bXBtZXRhPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgIDw/eHBhY2tldCBlbmQ9InciPz7/7gAOQWRvYmUAZEAAAAAB/9sAhAABAQEBAQEBAQEBAQEB
AQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAgICAgICAgICAgIDAwMDAwMDAwMDAQEBAQEB
AQEBAQECAgECAgMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMD
AwP/wAARCACWACoDAREAAhEBAxEB/90ABAAG/8QBogAAAAYCAwEAAAAAAAAAAAAABwgGBQQJAwoC
AQALAQAABgMBAQEAAAAAAAAAAAAGBQQDBwIIAQkACgsQAAIBAwQBAwMCAwMDAgYJdQECAwQRBRIG
IQcTIgAIMRRBMiMVCVFCFmEkMxdScYEYYpElQ6Gx8CY0cgoZwdE1J+FTNoLxkqJEVHNFRjdHYyhV
VlcassLS4vJkg3SThGWjs8PT4yk4ZvN1Kjk6SElKWFlaZ2hpanZ3eHl6hYaHiImKlJWWl5iZmqSl
pqeoqaq0tba3uLm6xMXGx8jJytTV1tfY2drk5ebn6Onq9PX29/j5+hEAAgEDAgQEAwUEBAQGBgVt
AQIDEQQhEgUxBgAiE0FRBzJhFHEIQoEjkRVSoWIWMwmxJMHRQ3LwF+GCNCWSUxhjRPGisiY1GVQ2
RWQnCnODk0Z0wtLi8lVldVY3hIWjs8PT4/MpGpSktMTU5PSVpbXF1eX1KEdXZjh2hpamtsbW5vZn
d4eXp7fH1+f3SFhoeIiYqLjI2Oj4OUlZaXmJmam5ydnp+So6SlpqeoqaqrrK2ur6/9oADAMBAAIR
AxEAPwDf49+691V9/MB/mdbM+BG6eptqZ7q/cfY1b2MtbmMrNic9Rbeg2ztHG19Pja3J0bVmNyg3
HnzPM5hxxNDC6xkyVcWpL+691ZhicnRZzF43M42b7jHZfH0eToKgKyieir6eOqpZgDYgSQSqwvyL
+/de6cffuvde9+691737r3X/0N/j37r3VSn8234A575tdP7Zy3WAx/8Apt6hq8xkdn47J1dPjKLe
e389BRjcmzZMtVGKlx2UqpsTSVONqKqRKRKiF4ZnhjqXqIfde6ot2B85P5vvxe2piuj6jrHfldRd
f00W38HF2J0LuTcObxWExyCkx2JpNxUdDSHOYOihjCUVRJLVj7YIsUxgWJV917q1/wDle/N357/J
Lubd2zvkf0//AArrbG7Hq80u9v8ARpuDrr+7+54MniqfFYgVmWk/h+bOepKupJo1Q1a+Dzq6wxSq
3uvdXve/de697917r//R3+PfuvdVh/zQP5gkXwS6mwdRtfFYvcnc3Z1XlMX13iMwZJMLiKTDRUkm
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
691aH7917r//2Q==');

		  $html = '<hr><table border="0">
			<tr>
			<td align="center">Sistema de Facturación Computarizada <b>www.factufacil.bo</b></td>
			</tr>
			<tr>
			<td width="578" align="center">Pág '.$this->getAliasNumPage().'/'.$this->getAliasNbPages().'</td>
			</tr>
			</table>';
        $this->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
		//$this->Image('@'.$imgdata, '7', '158', 4, 12, '', 'www.factufacil.bo', 'T', false, 300, '', false, false, 0, false, false, false);

	}
}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ipxserver');
$pdf->SetTitle('Factura');
$pdf->SetSubject('Primera Factura');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set margins
$pdf->SetMargins(15, 20, 15);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// borra la linea de arriba en el area del header
$pdf->setPrintHeader(false);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set some language-dependent strings (optional)
if (@file_exists('/includes/tcpdf/examples/lang/spa.php')) {
	require_once('/includes/tcpdf/examples/lang/spa.php');
	$pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', 'B' , 12);
$nit = $invoice->nit;
$nfac = $invoice->number;
$nauto = $invoice->authorization_number;
$sfc = "1";

// add a page
$pdf->AddPage('P', 'LETTER');
//contenido del recuadro
$html = '
	<table border="0" width="180">
	<tr>
		<td width="75" style="font-size:8px">NIT:</td>
		<td align="left" style="font-size:10px">:&nbsp;'.$nit.'</td>
	</tr>
	<tr>
		<td style="font-size:8px">AUTORIZACI&Oacute;N N&ordm;</td>
		<td align="left" style="font-size:10px">:&nbsp;'.$nauto.'</td>
	</tr>
	<tr>
		<td style="font-size:8px">FACTURA N&ordm;</td>
		<td align="left" style="font-size:10px">:&nbsp;'.$nfac.'</td>
	</tr>
	<tr><td></td></tr>

	</table>
';
//imprime el contenido de la variable html
$pdf->writeHTMLCell($w=0, $h=0, $x='140', $y='13', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
//dibuja un rectangulo
$pdf->SetLineStyle(array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
$pdf->RoundedRect(138, 11, 63, 18, 2, '1111', null);
$imgdata = "";//base64_decode($invoice->logo);
$pdf->Image('@'.$imgdata, '26', '6', '34', '30', '', '', 'T', false, 500, '', false, false, 0, false, false, false);

///title
$anchoDivFac = 480;
if($invoice->type_third==0)
{
    $factura = "FACTURA";
    $tercero ="";
}
else{
    $factura = "FACTURA POR TERCEROS";
    $tercero = $matriz->name;
	$anchoDivFac = 520;
}

$titleFactura='<table border="0">
<tr>
<td width="480" align="center"><font color="#333333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$factura.'</font></td>
</tr>
</table>';
$pdf->SetFont('helvetica', 'B' , 22);
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='29', $titleFactura, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
$pdf->SetFont('helvetica', 'B' , 9);

 $sinCreditoFiscal = "SIN DERECHO A CR&Eacute;DITO FISCAL";
$sinCreditoFiscalHtml='<table border="0">
<tr>
<td width="500" align="center"><font color="#333333">&nbsp;&nbsp;&nbsp;&nbsp;'.$sinCreditoFiscal.'</font></td>
</tr>
</table>';
$pdf->SetFont('helvetica', 'B' , 13);
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='38', $sinCreditoFiscalHtml, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
$pdf->SetFont('helvetica', 'B' , 11);








//nombre de la empresa
$business = $invoice->account_name;
$unipersonal = $invoice->account_uniper;
$pdf->SetFont('helvetica', 'B', 10, false);
// $NombreEmpresa = '
//     <p style="line-height: 150%">
//         <font color="#333333">
//             '.$business.'
//         </font>
//     </p>';
//$NombreEmpresa = ' <table border="0">
//  <tr>
 //   <td width="250" align="center"><font color="#333333">'.$business.'</font></td>
//  </tr>
//</table>
//';
//$pdf->writeHTMLCell($w=0, $h=0, $x='45', $y='10', $NombreEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);

$pdf->SetFont('helvetica', 'B', 8, false);
if($unipersonal!="")
    $pdf->writeHTMLCell($w=0, $h=0, $x='15', $y='36', 'De: '.$unipersonal, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
$pdf->writeHTMLCell($w=0, $h=0, $x='15', $y='1', $tercero, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
if($copia==1)
    $original = "COPIA";
else
$original = "ORIGINAL";


$pdf->SetFont('helvetica', 'B', 12);
    $original = '
        <p style="line-height: 150% ">
            '.$original.'
        </p>';
$pdf->writeHTMLCell($w=0, $h=0, $x='155', $y='29', $original, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);

//datos de la empresa
// $casa = $matriz->name;
$casa = "CASA MATRIZ";
$dir_casa = "dreccion casa matriz";//$matriz->address2."  ".$matriz->address1;
$tel_casa = "direccion phone";//$matriz->work_phone;
$city_casa = "la paz bolivia ";//$matriz->city." - Bolivia";
//if($matriz->city == $invoice->city && $invoice->branch_id != $matriz->id)
  //  $city_casa ="";
//else
$city_casa = '<tr>
        <td width="150" align="center">'.$city_casa.'</td>
        </tr>';
$pdf->SetFont('helvetica', '', 8);

if(true)//$invoice->branch_id == $matriz->id || $branch->number_branch == 0)
{
	$datoEmpresa = '
    <table border = "0">
        <tr style="line-height:1">
        <td width="150" align="center"><b>'.$casa.'</b></td>
        </tr>
        <tr style="line-height:1">
        <td width="150" align="center">'.$dir_casa.' </td>
        </tr>
        <tr style="line-height:1">
        <td width="150" align="center">Telfs: '.$tel_casa.'</td>
        </tr>
        '.$city_casa.'
    </table>
    ';
}
else{
	$sucursal = $invoice->branch_name;
	$direccion = $invoice->address1." - ".$invoice->address2;
	$ciudad = $invoice->city." - Bolivia";
	$telefonos =$invoice->phone;
	$datoEmpresa = '
    <table border = "0">
        <tr style="line-height:0.9">
        <td width="270" align="center"><b><font size="7">'.$casa.'</font></b></td>
        </tr>
        <tr style="line-height:0.9">
        <td width="270" align="center"><font size="7">'.$dir_casa.'</font></td>
        </tr>
        <tr style="line-height:0.9">
        <td width="270" align="center"><font size="7">Telfs: '.$tel_casa.'</font></td>
        </tr>
        <font size="7">'.$city_casa.'</font>
        <tr style="line-height:0.9">
        <td width="270" align="center"><b><font size="7">'.$sucursal.'</font></b></td>
        </tr>
        <tr style="line-height:0.9">
        <td width="270" align="center"><font size="7">'.$direccion.'</font></td>
        </tr>
        <tr style="line-height:0.9">
        <td width="270" align="center"><font size="7">Telfs: '.$telefonos.'</font></td>
        </tr>
        <tr style="line-height:0.9">
        <td width="270" align="center"><font size="7">'.$ciudad.'</font></td>
        </tr>
    </table>
    ';
}

$pdf->writeHTMLCell($w=0, $h=0, $x='15', $y='36', $datoEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
//actividad económica
$actividad=$invoice->economic_activity;
$pdf->SetFont('helvetica', '', 10);
$actividadEmpresa = '
    <table>
        <tr>
            <td align="center">'.$actividad.'</td>
        </tr>
    </table>';

$pdf->writeHTMLCell($w=0, $h=0, $x='135', $y='36', $actividadEmpresa, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
//TABLA datos del cliente

$pdf->SetFont('helvetica', '', 11);

$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$lenguage = 'es_ES.UTF-8';
putenv("LANG=$lenguage");
setlocale(LC_ALL, $lenguage);

//$date =date("d/m/Y", strtotime($invoice->invoice_date));
//$date = DateTime::createFromFormat("d/m/Y", $date);
//$fecha=strftime("%d de %B de %Y",$date->getTimestamp());

$date = DateTime::createFromFormat("d/m/Y", $invoice->date);
if($date== null){
    $date = DateTime::createFromFormat("Y-m-d", $invoice->date);
    $fecha = strftime("%d de %B de %Y",$date->getTimestamp());
}
else
    $fecha = strftime("%d de %B de %Y",$date->getTimestamp());



$fecha= $invoice->state.", ".$fecha;
$senor = $invoice->client_name;
$nit = $invoice->client_nit;

$datosCliente = '
<table cellpadding="2" border="0">
    <tr>
        <td width="300"><b>&nbsp;Lugar y fecha :</b>'.$fecha.'</td>
        <td width="220" align="right"><b>NIT/CI :</b>'.$nit.'</td>
    </tr>
    <tr>
        <td colspan="2"><b>&nbsp;Se&ntilde;or(es):</b> '.$senor .'</td>
    </tr>

</table>
';
//$datosCliente="asdf";

$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='58', $datosCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);

//dibuja rectangulo datos del cliente
$pdf->SetLineStyle(array('width' => 0.3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
$pdf->RoundedRect(16, 58, 184, 14, 1, '1111', null);
$textTitulos = "";
$textTitulos .= '<p></p>
<table border="0.2" cellpadding="3" cellspacing="0">
    <thead>
        <tr>
         <td width="70" align="center" bgcolor="#E6DFDF"><font size="10"><b>CÓDIGO</b></font></td>
         <td width="355" align="center" bgcolor="#E6DFDF"><font size="10"><b>DETALLE</b></font></td>

         <td width="97" align="center" bgcolor="#E6DFDF"><font size="10"><b>TOTAL</b></font></td>
        </tr>
    </thead>
</table>
';
$pdf->writeHTMLCell($w=0, $h=0, '', '66', $textTitulos, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
//
$ini = 0;
$final = "";
$resto = $ini;
//for ($i=0;$i<=10;$i++)
//{
foreach ($products as $key => $product){
		$textContenido ='
        <table border="0.2" cellpadding="3" cellspacing="0">
		<tr>
		<td width="70" align="center"><font size="10">'.$product->code.'</font></td>
		<td width="355"><font size="10">'.$product->name.'</font></td>

		<td width="97" align="right"><font size="10"> '.number_format((float)($product->price*$product->quantity), 2, '.', ',').'</font></td>
		</tr>
         </table>
		';
        $ini = $pdf->GetY(); //punto inicial antes de dibujar la siguiente fila

        if(($ini+$resto)>= 250.46944444444){

			$pdf->AddPage('P', 'LETTER');
            $pdf->writeHTMLCell($w=0, $h=0, '', '', $textContenido, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
        }
        else{
        $pdf->writeHTMLCell($w=0, $h=0, '', '', $textContenido, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
        $final = $pdf->GetY();  //punto hasta donde se dibujo la fila
        }
        $resto = $final-$ini; //diferencia entre $ini y $final para sacar el tamaño siguiente a dibujar
//}
}
$texPie = "";
$subtotal = number_format((float)$invoice->importe_total, 2, '.', ',');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, '.', ',');
$total = number_format((float)$invoice->importe_neto, 2, '.', ',');
$fiscal=number_format((float)$invoice->debito_fiscal, 2, '.', '');
$ice="0";


//require_once(app_path().'/includes/numberToString.php');
//$nts = new numberToString();
$importe = number_format((float)$invoice->importe_neto, 2, '.', '');
$num = explode(".", $importe);
if(!isset($num[1]))
    $num[1]="00";

//$literal= $nts->to_word($num[0]).substr($num[1],0,2);
$literal = "numero literal";



$pdf->SetFont('helvetica', '', 11);
		$texPie .='
		<table border="0.2" cellpadding="3" cellspacing="0">
            <tr>
                <td width="425" align="right"><b>SUBTOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td  width="97" align="right"><b>'.$subtotal.'</b></td>
            </tr>
            <tr>
                <td width="425"  align="right"><b>Descuentos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td width="97" align="right"><b>'.$descuento.'</b></td>
            </tr>
            <tr>
                <td width="425"  align="right"><b>TOTAL A PAGAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                <td width="97" align="right"><b>'.$total.'</b></td>
            </tr>

            <tr>
                <td colspan="2" style="font-size:9px"><b>Son: </b>'.$literal.'/100 BOLIVIANOS.</td>
            </tr>
		</table>
		';
        if ($pdf->GetY() >= '210.6375' ){

            $pdf->AddPage('P', 'LETTER');
        }

$pdf->writeHTMLCell($w=0, $h=0, '', '', $texPie, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
//nota al cliente
$restoQr = 11;
$line=60;
if (!empty($invoice->public_notes)){
$nota = $invoice->public_notes;
$notaCliente = '

		<table style="padding:0px 0px 0px 5px" border="0">
		<tr>
			<td style="line-height: '.$line.'%"> </td>
		</tr>
		<tr>
			<td width="88" align="right" style="font-size:9px;"><b>Nota al Cliente:</b></td>
			<td width="352" align="left" bgcolor="#F2F2F2" style="font-size:9px; border-left: 1px solid #000;">'.$nota.'</td>
		</tr>
		</table>
';
$pdf->writeHTMLCell($w=0, $h=0, '', '', $notaCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
$restoQr=$restoQr+10;
$line=100;
}
if (!empty($invoice->terms)){
$nota = $invoice->public_notes;
$terminos = $invoice->terms;
$termCliente = '
		<table style="padding:0px 0px 0px 5px">
		<tr><td style="line-height: '.$line.'%"> </td></tr>
		<tr>
			<td width="88" align="right" style="font-size:9px"><b>Términos de Facturación: </b></td>
			<td width="352" align="left" bgcolor="#F2F2F2" style="font-size:9px; border-left: 1px solid #000; ">'.$terminos.'</td>
		</tr>
		</table>
';
$pdf->writeHTMLCell($w=0, $h=0, '', '', $termCliente, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);
$restoQr=$restoQr+11;
$line=50;
}

$control_code = $invoice->control_code;
$fecha_limite = date("d/m/Y", strtotime($invoice->deadline));
$fecha_limite = \DateTime::createFromFormat('Y-m-d',$invoice->deadline);
if($fecha_limite== null)
    $fecha_limite = $invoice->deadline;
else
    $fecha_limite = $fecha_limite->format('d/m/Y');

$law_gen="ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ÉSTA SERÁ SANCIONADO DE ACUERDO A LEY";

$law=$invoice->legend;
$datosFactura = '
<table border="0" style="line-height: 160%">
	<tr><td style="line-height: '.$line.'%"> </td></tr>
    <tr>
        <td width="230" align="left"><b>C&Oacute;DIGO DE CONTROL :&nbsp;&nbsp;'.$control_code.'</b></td>
        <td width="210" align="left"><b>Fecha L&iacute;mite de Emisi&oacute;n : &nbsp;'.$fecha_limite.' </b></td>
    </tr>
    <tr>
        <td width="450" align="center" style="font-size:7px"><b>"'.$law_gen.'"</b></td>
    </tr>
    <tr>
        <td width="450" align="center" style="font-size:7px">"'.$law.'"</td>
    </tr>
</table>
';
if ($pdf->GetY() >= '226.6375' ){
		$pdf->AddPage('P', 'LETTER');
		if(!empty($nota) && !empty($terminos)){
			$restoQr = $restoQr - 18;
		}
    }

$subtotal = number_format((float)$invoice->importe_total, 2, '.', '');
$descuento= number_format((float)($invoice->importe_total-$invoice->importe_neto), 2, '.', '');
$total = number_format((float)$invoice->importe_neto, 2, '.', '');
$pdf->writeHTMLCell($w=0, $h=0, '', '', $datosFactura, $border=0, $ln=1, $fill=0, $reseth=true, $align='left', $autopadding=true);

$date_qr = date("d/m/Y", strtotime($invoice->invoice_date));
$date_qr = \DateTime::createFromFormat('Y-m-d',$invoice->invoice_date);
if($date_qr== null)
    $date_qr = $invoice->invoice_date;
else
    $date_qr = $date_qr->format('d/m/Y');

if($descuento == '0.00')
    $descuento = 0;
$datosqr = $invoice->account_nit.'|'.$invoice->invoice_number.'|'.$invoice->number_autho.'|'.$date_qr.'|'.$total.'|'.$fiscal.'|'.$invoice->control_code.'|'.$invoice->client_nit.'|'.$ice.'|0|0|'.$descuento;
$pdf->write2DBarcode($datosqr, 'QRCODE,M', '175',
$pdf->GetY()-$restoQr, 25, 25, '', 'N');

//Close and output PDF document
$pdf->Output('factura.pdf', 'I');

die;
?>