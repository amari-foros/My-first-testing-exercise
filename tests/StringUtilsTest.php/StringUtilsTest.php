{\rtf1\ansi\ansicpg1251\cocoartf2513
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw16840\paperh23820\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
/*\
\uc0\u1053 \u1072 \u1078 \u1084 \u1080 \u1090 \u1077  \u1082 \u1085 \u1086 \u1087 \u1082 \u1091  run \u1095 \u1090 \u1086 \u1073 \u1099  \u1079 \u1072 \u1087 \u1091 \u1089 \u1090 \u1080 \u1090 \u1100  \u1090 \u1077 \u1089 \u1090 \u1099 .\
\uc0\u1055 \u1086 \u1087 \u1088 \u1086 \u1073 \u1091 \u1081 \u1090 \u1077  \u1080 \u1079 \u1084 \u1077 \u1085 \u1103 \u1090 \u1100  \u1082 \u1086 \u1076  \u1092 \u1091 \u1085 \u1082 \u1094 \u1080 \u1080  / \u1090 \u1077 \u1089 \u1090 \u1086 \u1074 , \u1079 \u1072 \u1087 \u1091 \u1089 \u1082 \u1072 \u1103  \u1087 \u1088 \u1086 \u1074 \u1077 \u1088 \u1082 \u1080  \u1079 \u1072 \u1085 \u1086 \u1074 \u1086 .\
*/\
\
require("src/StringUtils.php");\
\
if (StringUtils\\capitalize('hello') !== 'Hello') \{\
    throw new \\Exception('\uc0\u1060 \u1091 \u1085 \u1082 \u1094 \u1080 \u1103  \u1088 \u1072 \u1073 \u1086 \u1090 \u1072 \u1077 \u1090  \u1085 \u1077 \u1074 \u1077 \u1088 \u1085 \u1086 !');\
\}\
\
if (StringUtils\\capitalize('') !== '') \{\
    throw new \\Exception('\uc0\u1060 \u1091 \u1085 \u1082 \u1094 \u1080 \u1103  \u1088 \u1072 \u1073 \u1086 \u1090 \u1072 \u1077 \u1090  \u1085 \u1077 \u1074 \u1077 \u1088 \u1085 \u1086 !');\
\}\
\
echo '\uc0\u1042 \u1089 \u1077  \u1090 \u1077 \u1089 \u1090 \u1099  \u1087 \u1088 \u1086 \u1081 \u1076 \u1077 \u1085 \u1099 !';}