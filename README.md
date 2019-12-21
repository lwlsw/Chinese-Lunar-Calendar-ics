现成的中国农历ics文件

可以直接订阅 [ics文件][icsurl]，我会进行不定时更新！

[https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_my.ics][icsurl]

五个版本：

[2018-2025][ics20182025]

[2018-2030][ics20182030]

[2015-2030][ics20152030]

[2015-2050][ics20152050]

[2015-2100][ics20152100]

基本上可以覆盖所有需求，请各取所需！

chinese_lunar_my.ics是我正在使用的，会不定时更新

cmy是我修改过的增加时间的自动生成程序。

### C 版本

C版本速度更快，但暂时只在终端上输出ical。用户必须使用`>`将stdout的结果导入到指定文件以生成ical文件。

编译：

    $ cd c
    $ make

运行:

    #生成某年农历
    $ ./lunarcal 2016 > chinese_lunar_2016.ics

    #生成数年农历
    $ ./lunarcal 2016 2019 > chinese_lunar_2016_2019.ics


感谢
https://github.com/infinet/lunar-calendar
这个项目

感谢
https://github.com/infinet/lunar-calendar/issues/11#issuecomment-475123013
的替换方法

[icsurl]: https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_my.ics
[ics20182025]: https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_2018_2025.ics
[ics20182030]: https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_2018_2030.ics
[ics20152030]: https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_2015_2030.ics
[ics20152050]: https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_2015_2050.ics
[ics20152100]: https://lwlsw.github.io/Chinese-Lunar-Calendar-ics/chinese_lunar_2015_2100.ics
