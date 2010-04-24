<?php

/**
 * Localization
 *
 * This module contains prompts translated in Portuguese (Brazilian).
 * All the prompts are in ISO-8859-1 encoding.
 *
 * @package Engine
 * @subpackage Localization
 * @author Rodrigo Brayner
 */

//--------------------------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system.
//  Copyright (C) 2008-2010 by Artem Rodygin
//
//  This program is free software; you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation; either version 2 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License along
//  with this program; if not, write to the Free Software Foundation, Inc.,
//  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//
//--------------------------------------------------------------------------------------------------
//  Author                  Date            Description of modifications
//--------------------------------------------------------------------------------------------------
//  Rodrigo Brayner         2008-07-28      new-737: Brazilian Portuguese localization.
//  Rodrigo Brayner         2008-11-12      new-749: Guest access for unauthorized users.
//  Rodrigo Brayner         2009-01-09      new-774: 'Anyone' system role permissions.
//  Artem Rodygin           2009-04-12      bug-806: German translation causes two ambiguous "zuruck" buttons.
//  Artem Rodygin           2009-04-26      new-817: Field permissions dialog refactoring.
//  Artem Rodygin           2009-04-26      new-818: Change buttons layout on viewing record page.
//  Artem Rodygin           2009-10-12      new-848: LDAP TLS support.
//  Artem Rodygin           2009-10-12      new-837: Replace "Groups" with "Global groups" in main menu.
//  Artem Rodygin           2010-02-01      new-902: Transparent gzip compression of attachments
//  Artem Rodygin           2010-04-24      new-933: New column LS/T(Last State Time)
//--------------------------------------------------------------------------------------------------

$resource_portuguese = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Todos os campos marcados como obrigat�rio devem ser preenchidos.',
    'O valor padr�o deve conter valores entre %1 e %2.',
    'A conta est� desabilitada.',
    'A conta est� travada.',
    'Usu�rio Inv�lido.',
    'A conta escolhida j� existe..',
    'Email inv�lido.',
    'As senhas n�o conferem.',
    'A senha deve conter pelo menos %1 caracteres.',
    'O projeto escolhido j� existe.',
    /* 210 */
    'O grupo escolhido j� existe.',
    'O template ou o prefixo escolhido j� existe.',
    'O estado escolhido ou abrevia��o j� existe.',
    'O Campo escolhido j� existe.',
    'Valor inteiro inv�lido.',
    'Valor inteiro deve estar entre %1 e %2.',
    'O Valor de "%1" deve estar entre %2 e %3.',
    'O valor m�ximo deve ser maior do que o m�nimo.',
    'O upload do arquivo excedeu a diretiva "upload_max_filesize" no "php.ini".',
    'O tamanho do arquivo que foi feito upload n�o pode ser maior do que %1 Kbytes.',
    /* 220 */
    'O upload do arquivo foi parcialmente realizado.',
    'Nenhum upload de arquivo foi realizado.',
    'Faltando um diret�rio tempor�rio.',
    'O nome utilizado no anexo j� existe.',
    'Registro n�o encontrado.',
    'O nome do filtro utilizado j� existe.',
    'Data inv�lida.',
    'Valor da data deve estar entre %1 e %2.',
    'Tempo inv�lido.',
    'O tempo deve estar entre %1 e %2.',
    /* 230 */
    'O nome da assinatura utilizado j� existe.',
    'O nome do lembrete utilizado j� existe.',
    'Lembrete enviado com sucesso.',
    'O nome da visualiza��o utilizado j� existe.',
    'O nome da coluna utilizado j� existe.',
    'Falha ao salvar arquivo no disco.',
    'Upload do arquivo parado por extens�o.',
    'O JavaScript deve estar habilitado.',
    'Esta � uma mensagem autom�tica, por favor n�o responder.',
    'O subregistro utilizado j� existe.',
    /* 240 */
    'O nome do campo conjunto de filtros utilizado j� existe.',
    'Visualiza��o n�o pode conter mais do que %1 colunas.',
    'Valor de "%1" falha na checagem do formato.',
    'Usu�rio n�o est� autorizado.',
    'Usu�rio desconhecido ou senha incorreta.',
    'Tipo de autentica��o desconhecida.',
    'Erro desconhecido.',
    'Erro durante o parse do XML.',
    'Erro de conex�o com o banco de dados.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Tem certeza que quer apagar todas as visualiza��es selecionadas?',
    'Tem certeza que quer apagar esta conta?',
    'Tem certeza que quer apagar este projeto?',
    'Tem certeza que quer apagar este grupo?',
    'Tem certeza que quer apagar este template?',
    'Tem certeza que quer apagar este estado?',
    'Tem certeza que quer apagar este campo?',
    'Tem certeza que quer adiar este registro?',
    'Tem certeza que quer retomar este registro?',
    'Tem certeza que quer delegar este registro?',
    /* 310 */
    'Tem certeza que quer apagar todos os filtros selecionados?',
    'Tem certeza que quer apagar todas as assinaturas selecionadas?',
    'Tem certeza que quer enviar este lembrete?',
    'Tem certeza que quer apagar este lembrete?',
    'Tem certeza que quer apagar esta coluna?',
    'Tem certeza que quer sair?',
    'Tem certeza que quer apagar todos os conjuntos de filtros selecionados?',
    'Tem certeza que quer apagar este registro?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Portugu�s do Brasil',
    'Logar',
    '  OK  ',
    'Cancelar',
    'Salvar',
    'Voltar',
    'Pr�ximo',
    'Criar',
    'Modificar',
    'Remover',
    /* 1010 */
    'Registros',
    'Contas',
    'Projetos',
    'Mudar senha',
    'Campos de estado "%1"',
    'nenhum',
    'Total:',
    'Salvar senha',
    'Informa��es da conta',
    'Usu�rio',
    /* 1020 */
    'Nome completo',
    'E-mail',
    'Direitos',
    'administrador',
    'usu�rio',
    'Descri��o',
    'Senha',
    'Confirma��o',
    'desabilitado',
    'travado',
    /* 1030 */
    'Nova conta',
    'Conta "%1"',
    'Informa��o do projeto',
    'Nome do projeto',
    'Tempo de in�cio',
    'suspenso',
    'Novo projeto',
    'Projeto "%1"',
    'Grupos',
    'Informa��es do grupo',
    /* 1040 */
    'Nome do grupo',
    'Novo grupo',
    'Grupo "%1"',
    'Membros', /*Membership*/
    'Outros',
    'Membros',
    'Templates',
    'Informa��es de templates',
    'Nome do template',
    'Prefixo',
    /* 1050 */
    'Novo template',
    'Template "%1"',
    'Estados',
    'Informa��es do estado',
    'Nome do estado',
    'Abrevia��o',
    'Tipo do estado',
    'inicial',
    'intermedi�rio',
    'final',
    /* 1060 */
    'Respons�vel',
    'manter imut�vel',
    'delegar',
    'remover',
    'Novo estado',
    'Estado "%1"',
    'Criar intermedi�rio',
    'Criar final',
    'Transi��es',
    'Permiss�es',
    /* 1070 */
    'Tornar inicial',
    'Permitido',
    'Campos',
    'Informa��es do campo',
    'Order',
    'Nome do campo',
    'Tipo do campo',
    'n�mero',
    'cadeia de caracteres',
    'texto multilinhas',
    /* 1080 */
    'Obrigat�rio',
    'sim',
    'n�o',
    'Valor.m�n',
    'Valor.m�x',
    'Tamanho.m�x',
    'obrigat�rio',
    'Novo campo (passo %1/%2)',
    'Campo "%1"',
    'apenas leitura',
    /* 1090 */
    'leitura e escrita',
    'Informa��es gerais',
    'ID',
    'Projeto',
    'Assunto',
    'Estado',
    'Idade',
    'Novo registro (passo %1/%2)',
    'Registro "%1"',
    'Ir',
    /* 1100 */
    'Hist�rico',
    'Adiar',
    'Resumo',
    'Delegar',
    'Mudar estado',
    'Timestamp',
    'Originador',
    'Registro criado no estado "%1".',
    'Registro delegado para %1.',
    'Registro modificado.',
    /* 1110 */
    'Estado alterado para "%1".',
    'Registro adiado at� %1.',
    'Registro retomado.',
    'Arquivo "%1" anexado.',
    'Arquivo "%1" removido.',
    'permiss�o para criar registros',
    'permiss�o para alterar registros',
    'permiss�o para adiar registros',
    'permiss�o para retomar registros',
    'permiss�o para redelegar registros delegados',
    /* 1120 */
    'permiss�o para alterar estados de registros delegados',
    'permiss�o para anexar arquivos',
    'permiss�o para remover arquivos',
    'L�ngua',
    'Adicionar coment�rio',
    'Coment�rio adicionado.',
    'permiss�o para adicionar coment�rios',
    'Coment�rio',
    'Anexar arquivo',
    'Remover arquivo',
    /* 1130 */
    'Anexo',
    'Nome do anexo',
    'Arquivo anexado',
    'Anexos',
    'Sem campos.',
    'Idade cr�tica',
    'Tempo de congelamento',
    'Mudan�as',
    'Valor antigo',
    'Novo valor',
    /* 1140 */
    'check box',
    'registro',
    'lista',
    'Lista de itens',
    '%1 Kb',
    'Filtros',
    'Nome do filtro',
    'Todos os projetos',
    'Todos os templates',
    'Todos os estados',
    /* 1150 */
    'Ver registro',
    'Visualizar apenas criado por ...',
    'Visualizar apenas delegado para ...',
    'visualizar apenas n�o fechados',
    'Assunto',
    'Procurar',
    'Procurar par�metros',
    'Procurar resultados (filtrado)',
    'Texto a ser procurado',
    'procurar em campos',
    /* 1160 */
    'procurar em coment�rios',
    'Status',
    'ativo',
    'Assinaturas',
    'notificar quando registros forem criados',
    'notificar quando registros forem delegados',
    'notificar quando registros forem alterados',
    'notificar quando estados forem alterados',
    'notificar quando registros forem adiados',
    'notificar quando registros forem retomados',
    /* 1170 */
    'notificar quando coment�rios forem adicionados',
    'notificar quando arquivos forem anexados',
    'notificar quando arquivos forem removidos',
    'obrigat�rio',
    'Adiado',
    'Prazo',
    'Valor padr�o',
    'ligado',
    'desligado',
    'M�tricas',
    /* 1180 */
    'Registros abertos',
    'Criados vs Fechados',
    'semana',
    'n�mero',
    'Clonar',
    'Registro clonado de "%1".',
    'Deslogar',
    'notificar quando registros forem clonados',
    'Ajustes',
    'Linhas por p�gina',
    /* 1190 */
    'Indicadores por p�gina',
    'Travar',
    'Destravar',
    'Tipo do grupo',
    'global',
    'local',
    'Configura��o',
    'Caminho raiz local',
    'Caminho raiz da Web',
    'Seguran�a',
    /* 1200 */
    'Tamanho m�nimo da senha',
    'Tamanho m�ximo de tentativas de login',
    'Timeout de travamento (mins)',
    'Banco de dados',
    'Tipo do banco do dados',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Servidor do banco de dados',
    'Nome do banco de dados',
    /* 1210 */
    'Usu�rio do banco de dados',
    'Active Directory',
    'LDAP server',
    'N�mero da porta',
    'Procurar conta',
    'Base DN',
    'Administradores',
    'Notifica��es de e-mail',
    'Tamanho m�ximo',
    'Debug',
    /* 1220 */
    'Modo de debug',
    'habilitado (sem dados privados)',
    'habilitado (todos os dados)',
    'Logs de debug',
    'Habilitado',
    'Desabilitado',
    '%1 min',
    'permiss�o para apenas visualizar registros.',
    'Selecinar todos',
    'Autor',
    /* 1230 */
    'data',
    'dura��o',
    'visualizar apenas adiados',
    'Nome da assinatura',
    'Eventos',
    'Vers�o %1',
    'papel',
    'Assinar',
    'Cancelar assinatura',
    'Lembretes',
    /* 1240 */
    'Nome do lembrete',
    'Assunto do lembrete',
    'Receptores do lembrete',
    'Novo lembrete (passo %1/%2)',
    'Lembrete "%1"',
    'permiss�o para enviar lembretes',
    'Enviar',
    'Novo filtro',
    'Filtro "%1"',
    'Nova assinatura',
    /* 1250 */
    'Assinatura "%1"',
    'Sua senha LDAP',
    'Voc� pode inserir links para outros registros especificando "rec#" e seu n�mero (e.g. "rec#305").',
    'Visualizar apenas estados movidos ...',
    'Compartilhar com ...',
    'Exportar',
    'Assinar outros...',
    'Assinado',
    '%1 tem assinado voc� para o registro.',
    '%1 tem cancelado a assinatura.',
    /* 1260 */
    'C�pia carbono',
    'Armazenamento',
    'Atributo LDAP',
    'Visualiza��es',
    'Visualizar informa��o',
    'View name',
    'Nova visualiza��o (passo %1/%2)',
    'Visualizar "%1"',
    'Sem visualiza��o',
    'Set',
    /* 1270 */
    'Colunas',
    'Informa��es da coluna',
    'T�tulo da coluna',
    'Nova coluna',
    'Coluna "%1"',
    'Alinhamento',
    'esquerda',
    'centro',
    'direita',
    'O servi�o ficar� indispon�vel desde %1 at� %2 (%3)',
    /* 1280 */
    'Todos delegados para mim',
    'Todos criados por mim',
    'Remover sele��o de todos',
    'd/m/yyyy',
    'Dump',
    'Subregistros',
    'Criar subregistro',
    'Anexar subregistro',
    'Subregistro removido',
    'ID do subregistro',
    /* 1290 */
    'Subregistro "%1" adicionado.',
    'Subregistro "%1" removido.',
    'permiss�o para adicionar subregistros',
    'permiss�o para remover subregistros',
    'notificar quando subregistros forem adicionados',
    'notificar quando subregistros forem removidos',
    'registros criados',
    'registros fechados',
    'Confidencial',
    'Adicionar coment�rio confidencial',
    /* 1300 */
    'permiss�o para adicionar/ler coment�rios confidenciais',
    'Coment�rio confidencial adicionado.',
    'ID principal (pai)',
    'depend�ncia',
    'escondido',
    'Adicionar separador',
    'Delimitador CSV',
    'Codifica��o CSV',
    'Finaliza��o do CSV',
    'Resultados da busca (sem filtros)',
    /* 1310 */
    'Habilitar filtros',
    'Desabilitar filtros',
    'Conjunto de filtros atual',
    'Salvar conjunto de filtros',
    'Conjuntos de filtros',
    'Nome do conjunto de filtros.',
    'Conjunto de filtros "%1"',
    'Visualiza��o atual',
    'Salvar visualiza��o',
    'Expandir todos',
    /* 1320 */
    'Agrupar todos',
    'Restaurar valores padr�es',
    'P/Ev',
    'PCRE para checar valores do campo',
    'Procurar PCRE para transformar valores do campo',
    'Substituir PCRE para transformar valores do campo',
    'Pr�ximo estado por padr�o',
    'Status da adia��o',
    'mostrar todos',
    'visualizar apenas ativos',
    /* 1330 */
    'Evento',
    'Sem conjunto de filtros.',
    'Acesso de convidado',
    'Nenhum.',
    'Global grupos',
    'Convidado',
    'Importar',
    'permiss�o para remover registros',
    'Tipo de autentica��o',
    'L�ngua padr�o',
    /* 1340 */
    'Expira��o da senha (em dias)',
    'Expira��o da sess�o (em minutos)',
    'Autentica��o LDAP',
    'PostgreSQL',
    'lista de �ndices',
    'lista de valores',
    'Criado',
    'Marcar como lido',
    'Registrado',
    'TLS',
    /* 1350 */
    'Compress�o',
    'P/Es',
);

?>
