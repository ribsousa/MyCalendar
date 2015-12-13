<?php
return [
    'plugin' => [//Plugin File
        'name' => 'MeuCalendário',
        'description' => 'Calendário super simples para exibição de eventos.',
        'user_btn' => 'Usuários',
        'tab' => 'MeuCalendário',
        'access_events' => 'eventos',
        'access_categories' => 'categorias',
    ],
    'events' => [// Events Controller
        'menu_label' => 'Eventos',
        'all_users' => 'Todos Usuários',
        'new_user' => 'Novo Usuário',
        'list_title' => 'Gerenciar Usuários',
        'activating' => 'Ativando...',
        'activate_warning_title' => 'Usuário não ativado!',
        'activate_warning_desc' => 'Este usuário ainda não foi ativado e não poderá efetuar login.',
        'activate_confirm' => 'Você realmente deseja ativar este usuário?',
        'active_manually' => 'Ative este usuário manualmente',
        'delete_confirm' => 'Você realmente deseja excluir este usuário?',
        'activated_success' => 'O usuário foi ativado com sucesso!',
        'return_to_list' => 'Voltar à lista de usuários',
        'delete_selected_empty' => 'Não há usuários selecionados para excluir.',
        'delete_selected_confirm' => 'Excluir os usuários selecionados?',
        'delete_selected_success' => 'Excluído com sucesso os usuários selecionados.',
    ],
    'categories' => [// Categories Controller
        'menu_label' => 'Categorias',
        'all_users' => 'Todos Usuários',
        'new_user' => 'Novo Usuário',
        'list_title' => 'Gerenciar Usuários',
        'activating' => 'Ativando...',
        'activate_warning_title' => 'Usuário não ativado!',
        'activate_warning_desc' => 'Este usuário ainda não foi ativado e não poderá efetuar login.',
        'activate_confirm' => 'Você realmente deseja ativar este usuário?',
        'active_manually' => 'Ative este usuário manualmente',
        'delete_confirm' => 'Você realmente deseja excluir este usuário?',
        'activated_success' => 'Usuário foi activado com sucesso!',
        'return_to_list' => 'Voltar à lista de usuários',
        'delete_selected_empty' => 'Não há usuários selecionados para excluir.',
        'delete_selected_confirm' => 'Excluir os usuários selecionados?',
        'delete_selected_success' => 'Excluído com sucesso os usuários selecionados.',
    ],
    'settings' => [
        'description' => 'Configure proteção para categoria do calendário.',
        'menu_label' => 'Configurações do usuário',
        'menu_description' => 'Gerenciar configurações de base de usuários.',
        'public_perm_label' => 'Categoria pública',
        'public_perm_comment' => 'A permissão para as categorias que não serão bloqueadas a partir de exibição pública.',
        'deny_perm_label' => 'Categoria negada',
        'deny_perm_comment' => 'A permissão para as categorias que serão bloqueadas a partir de qualquer visão.',
        'default_perm_label' => 'Categoria padrão',
        'default_perm_comment' => 'A permissão que será definido em novas categorias por padrão (a menos que definido pelo usuário).',
    ],
    'month' => [// Month Component
        'name' => 'Componente mês',
        'description' => 'Mostra um calendário mensal com eventos',
        'month_title' => 'Mês',
        'month_description' => 'O mês que você deseja mostrar.',
        'year_title' => 'Ano',
        'year_description' => 'O ano que você deseja mostrar.',
        'events_title' => 'Eventos',
        'events_description' => 'Array dos eventos que você deseja mostrar.',
        'color_title' => 'Cor do calendário',
        'color_description' => 'Qual a cor que você deseja para o calendário?',
        'dayprops_title' => 'Propriedades do dia',
        'dayprops_description' => 'Array das propriedades que você deseja colocar no indicador de dia.',
        'loadstyle_title' => 'Carregar folha de estilo',
        'loadstyle_description' => 'Carregar o arquivo CSS padrão.',
        'opt_no' => 'Não',
        'opt_yes' => 'Sim',
        'color_red' => 'vermelho',
        'color_green' => 'verde',
        'color_blue' => 'azul',
        'color_yellow' => 'amarelo',
        'day_sun' => 'Dom',
        'day_mon' => 'Seg',
        'day_tue' => 'Ter',
        'day_wed' => 'Qua',
        'day_thu' => 'Qui',
        'day_fri' => 'Sex',
        'day_sat' => 'Sáb',
        'previous' => 'Anterior',
        'next' => 'Próximo',
    ],
    'week' => [// Week Component
        'name' => 'Componente Eventos',
        'description' => 'Obter Eventos do banco de dados e inseri-los na página',
    ],
    'evlist' => [// EvList Component
        'label' => 'Evento',
        'id' => 'ID',
        'name' => 'Título',
        'is_published' => 'Publicado',
        'user_id' => 'Criador',
        'fname' => 'Criador primeiro nome',
        'lname' => 'Criador útlimo nome',
        'date' => 'Data',
        'time' => 'Hora',
        'text' => 'Detalhes',
        'link' => 'Link',
        'categorys' => 'Categorias',
    ],
    'events_comp' => [// Events Component
        'name' => 'Componente Eventos',
        'description' => 'Obter Eventos do banco de dados e inseri-los na página',
        'linkpage_title' => 'Link para a página',
        'linkpage_desc' => 'Nome do arquivo da página do evento para os "Detalhes" links. Esta propriedade é usada pela parcial do componente evento.',
        'linkpage_group' => 'Links',
        'linkpage_opt_none' => 'Nenhum - Use Modal Pop-up',
        'title_max_title' => 'Comprimento máximo do Título Popup',
        'title_max_description' => 'O comprimento máximo da propriedade "title" que mostra os detalhes de um evento em foco.',
        'permissions_title' => 'Usar permissão',
        'permissions_description' => 'Usar permissões para restringir o que as categorias de eventos são mostrados com base em funções.',
        'permissions_opt_no' => 'Não',
        'permissions_opt_yes' => 'Sim',
    ],
    'event' => [// Event Component and Model
        'label' => 'Evento',
        'id' => 'ID',
        'name' => 'Título',
        'is_published' => 'Publicado',
        'user_id' => 'Criador',
        'fname' => 'Criador primeiro nome',
        'lname' => 'Criador útlimo nome',
        'date' => 'Data',
        'time' => 'Hora',
        'text' => 'Detalhes',
        'link' => 'Link',
        'categorys' => 'Categorias',
        'category' => 'Categoria',
        'error_not_found' => 'Evento não encontrado!',
        'error_allow_no' => 'Evento não permitido!',
        'error_prohibit' => 'evento Proibido!',
        'error_user_model' => 'User Model Not Installed',
        'error_pick_month_year' => 'Pick a Month AND Year',
        'phold_name' => 'Nome do seu Evento',
        'phold_fname' => 'Criador primeiro nome',
        'phold_lname' => 'Criador útlimo nome',
        'phold_date' => 'Escolha uma data',
        'phold_time' => 'Escolha uma hora',
        'phold_text' => 'Digite o máximo de detalhes como você quer sobre o seu evento. (HTML OK)',
        'phold_link' => 'Adicionar Link URL para o seu evento.',
        'phold_categorys' => 'Categorias',
        'empty_categorys' => 'Não há categorias, você deve criar uma primeiro!',
        'month_jan' => 'January',
        'month_feb' => 'February',
        'month_mar' => 'March',
        'month_apr' => 'April',
        'month_may' => 'May',
        'month_jun' => 'June',
        'month_jul' => 'July',
        'month_aug' => 'August',
        'month_sep' => 'September',
        'month_oct' => 'October',
        'month_nov' => 'November',
        'month_dec' => 'December',
    ],
    'event_form' => [// EventForm Component
        'name' => 'Componente EventForm',
        'description' => 'Formulário front-end para permitir que os usuários adicione seus próprios eventos',
        'allow_pub_title' => 'Permitir publicação',
        'allow_pub_description' => 'Permitir que os usuários publiquem seu evento. (Não significa que um administrador deve fazê-lo.)',
        'ckeditor_title' => 'Use CKEditor',
        'ckeditor_description' => 'Carregue CKEditor do cdn.ckeditor.com no campo editor para descrição do evento.',
        'opt_no' => 'Não',
        'opt_yes' => 'Sim',
        'btn_add' => 'Adicionar evento',
        'btn_edit' => 'Editar',
        'btn_delete' => 'Excluir',
        'btn_save' => 'Salvar',
        'btn_cancel' => 'Cancelar',
        'saving' => 'Salvando evento...',
        'delete_conf' => 'Você realmente deseja excluir este evento?',
    ],
];
