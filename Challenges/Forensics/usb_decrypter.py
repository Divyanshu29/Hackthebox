#!/bin/bash python
newmap = {
 '04': 'a',
 '05': 'b',
 '06': 'c',
 '07': 'd',
 '08': 'e',						#By default this is in hex and also those found from wireshark are also in hex
 '09': 'f',
 '0a': 'g',
 '0b': 'h',
 '0c': 'i',
 '0d': 'j',
 '0e': 'k',
 '0f': 'l',
 '10': 'm',
 '11': 'n',
 '12': 'o',
 '13': 'p',
 '14': 'q',
 '15': 'r',
 '16': 's',
 '17': 't',
 '18': 'u',
 '19': 'v',
 '1a': 'w',
 '1b': 'x',
 '1c': 'y',
 '1d': 'z',
 '1e': '1',
 '1f': '2',
 '20': '3',
 '21': '4',
 '22': '5',
 '23': '6',
 '24': '7',
 '25': '8',
 '26': '9',
 '27': '0',
 '28': '\n',
 '29': 'esc',
 '2a': '<backspace>',
 '2b': '<tab>',
 '2c': ' ',
 '2d': '-',
 '2e': '+',
 '2f': '[',
 '30': ']',
# '31': 'RightArrow',
# '32': 'LetfArrow',
 '37': '.',
 '36': ',',
 '34': '\'',
 '50': '<Left Arrow>',
 '4f': '<Right Arrow>'
 }
key2={
 '04': 'a',
 '05': 'b',
 '06': 'c',
 '07': 'd',
 '08': 'e',
 '09': 'f',
 '0a': 'g',
 '0b': 'h',
 '0c': 'i',
 '0d': 'j',
 '0e': 'k',
 '0f': 'l',
 '10': 'm',
 '11': 'n',
 '12': 'o',
 '13': 'p',
 '14': 'q',
 '15': 'r',
 '16': 's',
 '17': 't',
 '18': 'u',
 '19': 'v',
 '1a': 'w',
 '1b': 'x',
 '1c': 'y',
 '1d': 'z',
 '1e': '1',
 '1f': '2',
 '20': '3',
 '21': '4',
 '22': '5',
 '23': '6',
 '24': '7',
 '25': '8',
 '26': '9',
 '27': '0',
 '28': '\n',
 '29': 'esc',
 '2a': '<backspace>',
 '2b': '<tab>',
 '2c': ' ',
 '2d': '_',
 '2e': '+',
 '2f': '{',
 '30': '}',
# '31': 'RightArrow',
# '32': 'LetfArrow',
 '37': '>',
 '36': '<',
 '34': '"',
 '50': '<Left Arrow>',
 '4f': '<Right Arrow>'
}
password=''
with open("hexoutput.txt") as file:
	line=file.readlines()

for i in range(len(line)):
	if line[i][1:3] != "00":
		if line[i][3:5]	!= "00":
			password=password+key2[line[i][3:5]]
		if line[i][5:7] != "00":
			password=password+key2[line[i][5:7]]
		if line[i][7:9] != "00":
			password=password+key2[line[i][7:9]]
		if line[i][9:11] != "00":
			password=password+key2[line[i][9:11]]
		if line[i][11:13] != "00":
			password=password+key2[line[i][11:13]]
		if line[i][13:15] != "00":
			password=password+key2[line[i][13:15]]
		if line[i][15:17] != "00":
			password=password+key2[line[i][15:17]]
	else:
		if line[i][3:5]	!= "00":
			password=password+newmap[line[i][3:5]]
		if line[i][5:7] != "00":
			password=password+newmap[line[i][5:7]]
		if line[i][7:9] != "00":
			password=password+newmap[line[i][7:9]]
		if line[i][9:11] != "00":
			password=password+newmap[line[i][9:11]]
		if line[i][11:13] != "00":
			password=password+newmap[line[i][11:13]]
		if line[i][13:15] != "00":
			password=password+newmap[line[i][13:15]]
		if line[i][15:17] != "00":
			password=password+newmap[line[i][15:17]]
print password
