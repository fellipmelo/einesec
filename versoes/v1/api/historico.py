#!/usr/bin/env python
# -*- coding: utf-8 -*-

import os 
from time import sleep
import shutil, tempfile


while True:
	

	# quantidade de linhas latitude

	file_lat = open('hist_lat.txt', 'r')
	linhas_lat = file_lat.readlines()

	quant_linhas_lat = len(linhas_lat)

	print(quant_linhas_lat)

	primeira_lat = 1
	proxima_lat = 2

	# long 

	file_long = open('hist_long.txt', 'r')
	linhas_long = file_long.readlines()

	quant_linhas_long = len(linhas_long)

	print(quant_linhas_long)

	primeira_long = 1
	proxima_long = 2




	######## minha loc e marcador

	minha_loc = 1
	marcador = 1

	################

	while quant_linhas_lat and quant_linhas_long > 1:
		quant_linhas_lat = quant_linhas_lat - 1
		print quant_linhas_lat

		valor_lat_linha = linhas_lat[primeira_lat:proxima_lat]



		primeira_lat = primeira_lat + 1
		proxima_lat = proxima_lat + 1
		print(valor_lat_linha)

		## long 

		quant_linhas_long = quant_linhas_long - 1
		print quant_linhas_long

		valor_long_linha = linhas_long[primeira_long:proxima_long]

		

		primeira_long = primeira_long + 1
		proxima_long = proxima_long + 1
		print(valor_long_linha)

		file_lat.close()
		file_long.close()

		###### verifica se lat e long é igual a zero

		if valor_lat_linha == list('\n') and valor_long_linha == list('\n'):
			print('latitude é vazio')
			valor_lat_linha = "-18.91275343333"
			print('longitude é vazio')
			valor_long_linha = "-48.271484333"
		
		else:
			print("OKAY nenhum valor vazio")
			print(valor_lat_linha)
			print(valor_long_linha)

		##################minha loc e marcador##########################

		minha_loc = minha_loc + 1

		marcador = marcador + 1

		##############coloca marcadores ##################

		with open('historico.txt', 'r') as arquivo, \
		     tempfile.NamedTemporaryFile('w', delete=False) as out:
		    for index, linha in enumerate(arquivo, start=1):
		        if index == 48: # linha 2, mudar o conteúdo
		            out.write('\n        const marker{0} = new google.maps.Marker({1}position: MinhaLoc{2},map: map,{3});'.format(marcador, '{', minha_loc, '}'))
		        else: # não é linha 2, escreve a linha sem modificação
		            out.write(linha)

		# move o arquivo temporário para o original

		shutil.move(out.name, 'historico.txt')

		##############seta localizacoes ##################

		with open('historico.txt', 'r') as arquivo, \
		     tempfile.NamedTemporaryFile('w', delete=False) as out:
		    for index, linha in enumerate(arquivo, start=1):
		        if index == 39: # linha 2, mudar o conteúdo
		            out.write('\n        const MinhaLoc{0} = {1} lat: {2}, lng: {3} {4}; '.format(minha_loc, '{', ''.join(valor_lat_linha).replace('\n', ''),  ''.join(valor_long_linha).replace('\n', ''), '}', ))
		        else: # não é linha 2, escreve a linha sem modificação
		            out.write(linha)

		# move o arquivo temporário para o original
		shutil.move(out.name, 'historico.txt')





		## copia para historico php

	historico_txt = open('historico.txt', 'r')
	historico_php = open('historico.php', 'w')


	historico_cod = historico_txt.read()
	print(historico_cod)
	historico_php.write(historico_cod)

	historico_txt.close()
	historico_php.close()


	#### reescreve historico como original

	historico_bk = open('historico_bk.txt', 'r')
	historico_txt = open('historico.txt', 'w')

	historico_bk_dados = historico_bk.read()

	historico_txt.write(historico_bk_dados)


	historico_bk.close()
	historico_txt.close()

	sleep(30)