#!/usr/bin/env python
# -*- coding: utf-8 -*-

import os 
from time import sleep
import shutil, tempfile
from datetime import datetime


while True:
	

	# quantidade de linhas latitude

	file_lat = open('../historicos/hist_lat.txt', 'r')
	linhas_lat = file_lat.readlines()

	quant_linhas_lat = len(linhas_lat)

	print(quant_linhas_lat)

	primeira_lat = 1
	proxima_lat = 2

	# long 

	file_long = open('../historicos/hist_long.txt', 'r')
	linhas_long = file_long.readlines()

	quant_linhas_long = len(linhas_long)

	print(quant_linhas_long)

	primeira_long = 1
	proxima_long = 2

	# enumera data e hora como a lat e long acima

	file_data = open('../historicos/dataehora.txt', 'r')
	linhas_data = file_data.readlines()

	quant_linhas_data = len(linhas_data)

	print(quant_linhas_data)

	primeira_data = 1
	proxima_data = 2


	######## minha loc e marcador

	minha_loc = 1
	marcador = 1

	################

	##### verifica se tem muitas localização, se tiver apagar e salva 
	

	if len(linhas_data) > 20:

		backup_lat = open('../historicos/hist_lat.txt', 'r')
		backup_lat = open('../historicos/hist_long.txt', 'r')
		backup_lat = open('../historicos/dataehora.txt', 'r')

		bk_lat = backup_lat.readlines()
		bk_long = backup_lat.readlines()
		bk_data = backup_lat.readlines()

		data_e_hora_atuais = datetime.now()
		data_e_hora_em_texto = data_e_hora_atuais.strftime('%d/%m/%Y %H:%M')
		bkp_lat_file = 'historico_lat '+data_e_hora_em_texto + '.txt'
		bkp_long_file = 'historico_long '+data_e_hora_em_texto + '.txt'
		bkp_data_file = 'historico_data '+data_e_hora_em_texto + '.txt'

		bk_lat_escreve = open('historico_lat_backup.txt', 'w')
		bk_lat_escreve.write(bk_lat)
		bk_lat_escreve.close()
		bk_long_escreve = open(bkp_long_file, 'w')
		bk_long_escreve.write(bk_long)
		bk_long_escreve.close()
		bk_data_escreve = open(bkp_data_file, 'w')
		bk_data_escreve.write(bk_data)
		bk_data_escreve.close()


		limpa_lat = open('../historicos/hist_lat.txt', 'w')
		limpa_long = open('../historicos/hist_long.txt', 'w')
		limpa_data = open('../historicos/dataehora.txt', 'w')
		limpa_lat.close()
		limpa_long.close()
		limpa_data.close()

	else:
		print("NÃO PRECISA DE BACKUP")


	##### variavel vazia para calcular se esta perto ou nao

	lat_media = ''
	long_media = ''


	#######

	while quant_linhas_lat and quant_linhas_long and quant_linhas_data > 1:
		quant_linhas_lat = quant_linhas_lat - 1
		print(quant_linhas_lat)

		valor_lat_linha = linhas_lat[primeira_lat:proxima_lat]



		primeira_lat = primeira_lat + 1
		proxima_lat = proxima_lat + 1
		print(valor_lat_linha)

		## long 

		quant_linhas_long = quant_linhas_long - 1
		print(quant_linhas_long)

		valor_long_linha = linhas_long[primeira_long:proxima_long]


		primeira_long = primeira_long + 1
		proxima_long = proxima_long + 1
		print(valor_long_linha)


		## data e hora

		quant_linhas_data = quant_linhas_data - 1
		print(quant_linhas_data)

		valor_data_linha = linhas_data[primeira_data:proxima_data]
		primeira_data = primeira_data + 1
		proxima_data = proxima_data + 1
		print(valor_data_linha)
		###

		file_lat.close()
		file_long.close()
		file_data.close()

		###### verifica se lat e long e data é igual a zero

		if valor_lat_linha == list('\n') and valor_long_linha == list('\n') and valor_data_linha == list('\n'):
			print('latitude é vazio')
			valor_lat_linha = "-18.91275343333"
			print('longitude é vazio')
			valor_long_linha = "-48.271484333"
			print('Data é vazio')
			valor_data_linha = "10/08/2000"
		
		else:
			print("OKAY nenhum valor vazio")
			print(valor_lat_linha)
			print(valor_long_linha)


		##### configuração das variaveis latitude e longitude

		valor_lat_linha = ''.join(valor_lat_linha).replace('\n', '')
		valor_long_linha = ''.join(valor_long_linha).replace('\n', '')
		valor_data_linha = ''.join(valor_data_linha).replace('\n', '')

		####### calcula se esta muito proximo, se sim ele ignora, evitar excesso de marker no mapa

	







		##################minha loc e marcador##########################

		minha_loc = minha_loc + 1

		marcador = marcador + 1

		##############coloca marcadores ##################

		with open('../conf/historico.txt', 'r') as arquivo, \
		     tempfile.NamedTemporaryFile('w', delete=False) as out:
		    for index, linha in enumerate(arquivo, start=1):
		        if index == 48 and quant_linhas_lat > 1: # linha 2, mudar o conteúdo
		            out.write('\n        const marker{0} = new google.maps.Marker({1}position: MinhaLoc{2},map: map,title:"{3}",icon: image,{4});'.format(marcador, '{', minha_loc, valor_data_linha, '}'))
		        elif index == 48 and quant_linhas_lat >= 1: # linha 2, mudar o conteúdo
		            out.write('\n        const marker{0} = new google.maps.Marker({1}position: MinhaLoc{2},map: map,title:"{3}",{4});'.format(marcador, '{', minha_loc, valor_data_linha, '}'))
		        else: # não é linha 2, escreve a linha sem modificação
		            out.write(linha)

		# move o arquivo temporário para o original

		shutil.move(out.name, '../conf/historico.txt')

		##############seta localizacoes ##################

		with open('../conf/historico.txt', 'r') as arquivo, \
		     tempfile.NamedTemporaryFile('w', delete=False) as out:
		    for index, linha in enumerate(arquivo, start=1):
		        if index == 39: # linha 2, mudar o conteúdo
		            out.write('\n        const MinhaLoc{0} = {1} lat: {2}, lng: {3} {4}; '.format(minha_loc, '{', valor_lat_linha,  valor_long_linha, '}', ))
		        else: # não é linha 2, escreve a linha sem modificação
		            out.write(linha)

		# move o arquivo temporário para o original
		shutil.move(out.name, '../conf/historico.txt')

		#####  variavel da lat para calcular se esta perto da antiga posição

		lat_media = valor_lat_linha
		long_media = valor_long_linha


		## copia para historico php

	historico_txt = open('../conf/historico.txt', 'r')
	historico_php = open('../historico.php', 'w')


	historico_cod = historico_txt.read()
	print("Historico cod "+historico_cod)
	historico_php.write(historico_cod)

	historico_txt.close()
	historico_php.close()


	#### reescreve historico como original

	historico_bk = open('../conf/historico_bk.txt', 'r')
	historico_txt = open('../conf/historico.txt', 'w')

	historico_bk_dados = historico_bk.read()

	historico_txt.write(historico_bk_dados)


	historico_bk.close()
	historico_txt.close()

	sleep(30)