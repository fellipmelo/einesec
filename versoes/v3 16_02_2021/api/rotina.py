#!/usr/bin/env python
# -*- coding: utf-8 -*-

import os 
from time import sleep
import shutil, tempfile


while True:

	lat_file = open('../historicos/lat.txt', 'r')
	long_file = open('../historicos/long.txt', 'r')

	latitude = lat_file.read()
	longitude = long_file.read()


	lat_file.close()
	long_file.close()

	# lê do arquivo e escreve em outro arquivo temporário
	with open('../conf/painel.txt', 'r') as arquivo, \
	     tempfile.NamedTemporaryFile('w', delete=False) as out:
	    for index, linha in enumerate(arquivo, start=1):
	        if index == 36: # linha 2, mudar o conteúdo
	            out.write('        const MinhaLoc = { lat: %s, lng: %s };\n'%(latitude,longitude))
	        else: # não é linha 2, escreve a linha sem modificação
	            out.write(linha)

	# move o arquivo temporário para o original
	shutil.move(out.name, '../conf/painel.txt')
	print(latitude, longitude)

	#
	painel_txt = open('../conf/painel.txt', 'r')
	painel_php = open('../painel.php', 'w')


	painel_cod = painel_txt.read()
	print(painel_cod)
	painel_php.write(painel_cod)

	painel_txt.close()
	painel_php.close()

	# histori

	sleep(30)