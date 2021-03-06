<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2008-2010  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * Localization
 *
 * This module contains prompts translated in Portuguese (Brazilian).
 *
 * @package Engine
 * @subpackage Localization
 * @author Rodrigo Brayner
 */

$resource_portuguese = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Todos os campos marcados como obrigatório devem ser preenchidos.',
    'O valor padrão deve conter valores entre %1 e %2.',
    'A conta está desabilitada.',
    'A conta está travada.',
    'Usuário Inválido.',
    'A conta escolhida já existe..',
    'Email inválido.',
    'As senhas não conferem.',
    'A senha deve conter pelo menos %1 caracteres.',
    'O projeto escolhido já existe.',
    /* 210 */
    'O grupo escolhido já existe.',
    'O template ou o prefixo escolhido já existe.',
    'O estado escolhido ou abreviação já existe.',
    'O Campo escolhido já existe.',
    'Valor inteiro inválido.',
    'Valor inteiro deve estar entre %1 e %2.',
    'O Valor de "%1" deve estar entre %2 e %3.',
    'O valor máximo deve ser maior do que o mínimo.',
    'O upload do arquivo excedeu a diretiva "upload_max_filesize" no "php.ini".',
    'O tamanho do arquivo que foi feito upload não pode ser maior do que %1 Kbytes.',
    /* 220 */
    'O upload do arquivo foi parcialmente realizado.',
    'Nenhum upload de arquivo foi realizado.',
    'Faltando um diretório temporário.',
    'O nome utilizado no anexo já existe.',
    'Registro não encontrado.',
    'O nome do filtro utilizado já existe.',
    'Data inválida.',
    'Valor da data deve estar entre %1 e %2.',
    'Tempo inválido.',
    'O tempo deve estar entre %1 e %2.',
    /* 230 */
    'O nome da assinatura utilizado já existe.',
    'O nome do lembrete utilizado já existe.',
    'Lembrete enviado com sucesso.',
    'O nome da visualização utilizado já existe.',
    'Favor especifique uma breve descrição deste registro.',
    'Falha ao salvar arquivo no disco.',
    'Upload do arquivo parado por extensão.',
    'O JavaScript deve estar habilitado.',
    'Esta é uma mensagem automática, por favor não responder.',
    'Valor decimal inválido.',
    /* 240 */
    'Valor decimal deve conter valores de %1 a %2.',
    'Visualização não pode conter mais do que %1 colunas.',
    'Valor de "%1" falha na checagem do formato.',
    'Usuário não está autorizado.',
    'Usuário desconhecido ou senha incorreta.',
    'Erro desconhecido.',
    'Erro durante o parse do XML.',
    'Alterações salvas com sucesso.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Tem certeza que quer apagar todas as visualizações selecionadas?',
    'Tem certeza que quer apagar esta conta?',
    'Tem certeza que quer apagar este projeto?',
    'Tem certeza que quer apagar este grupo?',
    'Tem certeza que quer apagar este template?',
    'Tem certeza que quer apagar este estado?',
    'Tem certeza que quer apagar este campo?',
    'Tem certeza que deseja mudar o estado deste registro?',
    'Tem certeza que quer retomar este registro?',
    'Tem certeza que quer delegar este registro?',
    /* 310 */
    'Tem certeza que quer apagar todos os filtros selecionados?',
    'Tem certeza que quer apagar todas as assinaturas selecionadas?',
    'Tem certeza que quer enviar este lembrete?',
    'Tem certeza que quer apagar este lembrete?',
    'Tem certeza que quer sair?',
    'Tem certeza que quer apagar este registro?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Português',
    'Logar',
    'OK',
    'Cancelar',
    'Salvar',
    'Voltar',
    'Próximo',
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
    'Tema',
    'Informações da conta',
    'Usuário',
    /* 1020 */
    'Nome completo',
    'E-mail',
    'Padrão',
    'administrador',
    'usuário',
    'Descrição',
    'Senha',
    'Confirmação',
    'desabilitado',
    'travado',
    /* 1030 */
    'Nova conta',
    'Conta "%1"',
    'Informação do projeto',
    'Nome do projeto',
    'Tempo de início',
    'suspenso',
    'Novo projeto',
    'Projeto "%1"',
    'Grupos',
    'Informações do grupo',
    /* 1040 */
    'Nome do grupo',
    'Novo grupo',
    'Grupo "%1"',
    'Membros', /*Membership*/
    'Outros',
    'Membros',
    'Templates',
    'Informações de templates',
    'Nome do template',
    'Prefixo',
    /* 1050 */
    'Novo template',
    'Template "%1"',
    'Estados',
    'Informações do estado',
    'Nome do estado',
    'Abreviação',
    'Tipo do estado',
    'inicial',
    'intermediário',
    'final',
    /* 1060 */
    'Responsável',
    'manter imutável',
    'delegar',
    'remover',
    'Novo estado',
    'Estado "%1"',
    'Criar intermediário',
    'Criar final',
    'Transições',
    'Permissões',
    /* 1070 */
    'Tornar inicial',
    'Permitido',
    'Campos',
    'Informações do campo',
    'Order',
    'Nome do campo',
    'Tipo do campo',
    'número',
    'cadeia de caracteres',
    'texto multilinhas',
    /* 1080 */
    'Obrigatório',
    'sim',
    'não',
    'Valor.mín',
    'Valor.máx',
    'Tamanho.máx',
    'obrigatório',
    'Novo campo (passo %1/%2)',
    'Campo "%1"',
    'apenas leitura',
    /* 1090 */
    'leitura e escrita',
    'Informações gerais',
    'ID',
    'Projeto',
    'Assunto',
    'Estado',
    'Idade',
    'Novo registro',
    'Registro "%1"',
    'Meus registros',
    /* 1100 */
    'Histórico',
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
    'Registro adiado até %1.',
    'Registro retomado.',
    'Arquivo "%1" anexado.',
    'Arquivo "%1" removido.',
    'permissão para criar registros',
    'permissão para alterar registros',
    'permissão para adiar registros',
    'permissão para retomar registros',
    'permissão para redelegar registros delegados',
    /* 1120 */
    'permissão para reabrir registros',
    'permissão para anexar arquivos',
    'permissão para remover arquivos',
    'Língua',
    'Adicionar comentário',
    'Comentário adicionado.',
    'permissão para adicionar comentários',
    'Comentário',
    'Anexar arquivo',
    'Remover arquivo',
    /* 1130 */
    'Anexo',
    'Nome do anexo',
    'Arquivo anexado',
    'Anexos',
    'Sem campos.',
    'Idade crítica',
    'Tempo de congelamento',
    'Mudanças',
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
    'visualizar apenas não fechados',
    'Assunto',
    'Procurar',
    'Procurar parâmetros',
    'Procurar resultados',
    'Texto a ser procurado',
    'procurar em campos',
    /* 1160 */
    'procurar em comentários',
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
    'notificar quando comentários forem adicionados',
    'notificar quando arquivos forem anexados',
    'notificar quando arquivos forem removidos',
    'obrigatório',
    'Adiado',
    'Prazo',
    'Valor padrão',
    'ligado',
    'desligado',
    'Métricas',
    /* 1180 */
    'Registros abertos',
    'Criados vs Fechados',
    'semana',
    'número',
    'Clonar',
    'Registro clonado de "%1".',
    'Deslogar',
    'notificar quando registros forem clonados',
    'Ajustes',
    'Linhas por página',
    /* 1190 */
    'Indicadores por página',
    'Travar',
    'Destravar',
    'Tipo do grupo',
    'global',
    'local',
    'Configuração',
    'Linha',
    'Caminho raiz da Web',
    'Segurança',
    /* 1200 */
    'Tamanho mínimo da senha',
    'Tamanho máximo de tentativas de login',
    'Timeout de travamento (mins)',
    'Banco de dados',
    'Tipo do banco do dados',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Servidor do banco de dados',
    'Nome do banco de dados',
    /* 1210 */
    'Usuário do banco de dados',
    'Active Directory',
    'LDAP server',
    'Número da porta',
    'Procurar conta',
    'Base DN',
    'Administradores',
    'Notificações de e-mail',
    'Tamanho máximo',
    'Debug',
    /* 1220 */
    'Modo de debug',
    'habilitado (sem dados privados)',
    'habilitado (todos os dados)',
    'Logs de debug',
    'Habilitado',
    'Desabilitado',
    'decimal',
    'permissão para apenas visualizar registros.',
    'Selecinar todos',
    'Autor',
    /* 1230 */
    'data',
    'duração',
    'visualizar apenas adiados',
    'Nome da assinatura',
    'Eventos',
    'Versão %1',
    'papel',
    'Assinar',
    'Cancelar assinatura',
    'Lembretes',
    /* 1240 */
    'Nome do lembrete',
    'Assunto do lembrete',
    'Receptores do lembrete',
    'Novo lembrete',
    'Lembrete "%1"',
    'permissão para enviar lembretes',
    'Enviar',
    'Novo filtro',
    'Filtro "%1"',
    'Nova assinatura',
    /* 1250 */
    'Assinatura "%1"',
    'Número de linhas em campos múltiplos',
    'Você pode inserir links para outros registros especificando "rec#" e seu número (e.g. "rec#305").',
    'Visualizar apenas estados movidos ...',
    'Compartilhar com ...',
    'Exportar',
    'Assinar outros...',
    'Assinado',
    '%1 tem assinado você para o registro.',
    '%1 tem cancelado a assinatura.',
    /* 1260 */
    'Cópia carbono',
    'Armazenamento',
    'Atributo LDAP',
    'Visualizações',
    'Fechar',
    'View name',
    'Nova visualização',
    'Visualizar "%1"',
    'Sem visualização',
    'Set',
    /* 1270 */
    'Colunas',
    'Advertência',
    'Informação',
    'Erro',
    'Pergunta',
    'Alinhamento',
    'esquerda',
    'centro',
    'direita',
    'O serviço ficará indisponível desde %1 até %2 (%3)',
    /* 1280 */
    'Todos delegados para mim',
    'Todos criados por mim',
    'Visualizar em emails',
    'Favor aguardar...',
    'Dump',
    'Subregistros',
    'Criar subregistro',
    'Anexar subregistro',
    'Subregistro removido',
    'Intervalo de auto atualização',
    /* 1290 */
    'Subregistro "%1" adicionado.',
    'Subregistro "%1" removido.',
    'permissão para adicionar subregistros',
    'permissão para remover subregistros',
    'notificar quando subregistros forem adicionados',
    'notificar quando subregistros forem removidos',
    'registros criados',
    'registros fechados',
    'Confidencial',
    'Adicionar comentário confidencial',
    /* 1300 */
    'permissão para adicionar/ler comentários confidenciais',
    'Comentário confidencial adicionado.',
    'ID principal (pai)',
    'dependência',
    'Fuso horário',
    'Adicionar separador',
    'Delimitador CSV',
    'Codificação CSV',
    'Finalização do CSV',
    'notificar quando o registro for reaberto',
    /* 1310 */
    'Habilitar filtros',
    'Desabilitar filtros',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    'Expandir todos',
    /* 1320 */
    'Agrupar todos',
    'O registro é reaberto no estado "%1".',
    'P/Ev',
    'PCRE para checar valores do campo',
    'Procurar PCRE para transformar valores do campo',
    'Substituir PCRE para transformar valores do campo',
    'Próximo estado por padrão',
    'Status da adiação',
    'mostrar todos',
    'visualizar apenas ativos',
    /* 1330 */
    'Evento',
    'Reabrir',
    'Acesso de convidado',
    'Nenhum.',
    'Global grupos',
    'Convidado',
    'Importar',
    'permissão para remover registros',
    NULL,
    'Língua padrão',
    /* 1340 */
    'Expiração da senha (em dias)',
    'Expiração da sessão (em minutos)',
    'Autenticação LDAP',
    'PostgreSQL',
    'lista de índices',
    'lista de valores',
    'Criado',
    'Marcar como lido',
    'Registrado',
    'TLS',
    /* 1350 */
    'Compressão',
    'P/Es',
    'Comentários',
    'Tamanho',
    'Aparência',
    'CSV',
    'Habilitado',
    'Desabilitado',
    'Pré-visualização',
    'Proprietário',
    /* 1360 */
    'Qualquer um.',
    'Marcar como não lido',
    'Registros pai',
);

?>
