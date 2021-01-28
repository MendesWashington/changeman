<?php
/**
 * Translation utility class
 * Copyright (c) 2006-2010 Pablo Dall'Oglio
 * @author  Pablo Dall'Oglio <pablo [at] adianti.com.br>
 * @version 2.0, 2007-08-01
 */
class ApplicationTranslator
{
    private static $instance; // singleton instance
    private $lang;            // target language
    
    /**
     * Class Constructor
     */
    private function __construct()
    {
        $this->messages['en'][] = 'File not found';
        $this->messages['en'][] = 'Search';
        $this->messages['en'][] = 'Register';
        $this->messages['en'][] = 'Record saved';
        $this->messages['en'][] = 'Do you really want to delete ?';
        $this->messages['en'][] = 'Record deleted';
        $this->messages['en'][] = 'Function';
        $this->messages['en'][] = 'Table';
        $this->messages['en'][] = 'Tool';
        $this->messages['en'][] = 'Data';
        $this->messages['en'][] = 'Open';
        $this->messages['en'][] = 'New';
        $this->messages['en'][] = 'Save';
        $this->messages['en'][] = 'Find';
        $this->messages['en'][] = 'Edit';
        $this->messages['en'][] = 'Delete';
        $this->messages['en'][] = 'Cancel';
        $this->messages['en'][] = 'Yes';
        $this->messages['en'][] = 'No';
        $this->messages['en'][] = 'January';
        $this->messages['en'][] = 'February';
        $this->messages['en'][] = 'March';
        $this->messages['en'][] = 'April';
        $this->messages['en'][] = 'May';
        $this->messages['en'][] = 'June';
        $this->messages['en'][] = 'July';
        $this->messages['en'][] = 'August';
        $this->messages['en'][] = 'September';
        $this->messages['en'][] = 'October';
        $this->messages['en'][] = 'November';
        $this->messages['en'][] = 'December';
        $this->messages['en'][] = 'Today';
        $this->messages['en'][] = 'Close';
        $this->messages['en'][] = 'The field ^1 can not be less than ^2 characters';
        $this->messages['en'][] = 'The field ^1 can not be greater than ^2 characters';
        $this->messages['en'][] = 'The field ^1 can not be less than ^2';
        $this->messages['en'][] = 'The field ^1 can not be greater than ^2';
        $this->messages['en'][] = 'The field ^1 is required';
        $this->messages['en'][] = 'The field ^1 has not a valid CNPJ';
        $this->messages['en'][] = 'The field ^1 has not a valid CPF';
        $this->messages['en'][] = 'The field ^1 contains an invalid e-mail';
        $this->messages['en'][] = 'Permission denied';
        $this->messages['en'][] = 'Generate';
        $this->messages['en'][] = 'List';
        $this->messages['en'][] = 'Wrong password';
        $this->messages['en'][] = 'User not found';
        $this->messages['en'][] = 'User';
        $this->messages['en'][] = 'Users';
        $this->messages['en'][] = 'Password';
        $this->messages['en'][] = 'Login';
        $this->messages['en'][] = 'Name';
        $this->messages['en'][] = 'Group';
        $this->messages['en'][] = 'Groups';
        $this->messages['en'][] = 'Program';
        $this->messages['en'][] = 'Programs';
        $this->messages['en'][] = 'Back to the listing';
        $this->messages['en'][] = 'Controller';
        $this->messages['en'][] = 'Email';
        $this->messages['en'][] = 'Record Updated';
        $this->messages['en'][] = 'Password confirmation';
        $this->messages['en'][] = 'Front page';
        $this->messages['en'][] = 'Page name';
        $this->messages['en'][] = 'The passwords do not match';
        $this->messages['en'][] = 'Log in';
        $this->messages['en'][] = 'Date';
        $this->messages['en'][] = 'Column';
        $this->messages['en'][] = 'Operation';
        $this->messages['en'][] = 'Old value';
        $this->messages['en'][] = 'New value';
        $this->messages['en'][] = 'Database';
        $this->messages['en'][] = 'Profile';
        $this->messages['en'][] = 'Change password';
        $this->messages['en'][] = 'Leave empty to keep old password';
        $this->messages['en'][] = 'Results';
        $this->messages['en'][] = 'Invalid command';
        $this->messages['en'][] = '^1 records shown';
        $this->messages['en'][] = 'Administration';
        $this->messages['en'][] = 'SQL Panel';
        $this->messages['en'][] = 'Access Log';
        $this->messages['en'][] = 'Change Log';
        $this->messages['en'][] = 'SQL Log';
        $this->messages['en'][] = 'Clear form';
        $this->messages['en'][] = 'Send';
        $this->messages['en'][] = 'Message';
        $this->messages['en'][] = 'Subject';
        $this->messages['en'][] = 'Message sent successfully';
        $this->messages['en'][] = 'Check as read';
        $this->messages['en'][] = 'Check as unread';
        $this->messages['en'][] = 'Action';
        $this->messages['en'][] = 'Read';
        $this->messages['en'][] = 'From';
        $this->messages['en'][] = 'Checked';
        $this->messages['en'][] = 'Object ^1 not found in ^2';
        $this->messages['en'][] = 'Notification';
        $this->messages['en'][] = 'Categories';
        $this->messages['en'][] = 'Send document';
        $this->messages['en'][] = 'My documents';
        $this->messages['en'][] = 'Shared with me';
        $this->messages['en'][] = 'Document';
        $this->messages['en'][] = 'File';
        $this->messages['en'][] = 'Title';
        $this->messages['en'][] = 'Description';
        $this->messages['en'][] = 'Category';
        $this->messages['en'][] = 'Submission date';
        $this->messages['en'][] = 'Archive date';
        $this->messages['en'][] = 'Upload';
        $this->messages['en'][] = 'Download';
        $this->messages['en'][] = 'Next';
        $this->messages['en'][] = 'Documents';
        $this->messages['en'][] = 'Permission';
        $this->messages['en'][] = 'Unit';
        $this->messages['en'][] = 'Units';
        $this->messages['en'][] = 'Add';
        $this->messages['en'][] = 'Active';
        $this->messages['en'][] = 'Activate/Deactivate';
        $this->messages['en'][] = 'Inactive user';
        $this->messages['en'][] = 'Send message';
        $this->messages['en'][] = 'An user with this login is already registered';
        $this->messages['en'][] = 'Access Stats';
        $this->messages['en'][] = 'Accesses';
        $this->messages['en'][] = 'Preferences';
        $this->messages['en'][] = 'Mail from';
        $this->messages['en'][] = 'SMTP Auth';
        $this->messages['en'][] = 'SMTP Host';
        $this->messages['en'][] = 'SMTP Port';
        $this->messages['en'][] = 'SMTP User';
        $this->messages['en'][] = 'SMTP Pass';
        $this->messages['en'][] = 'Ticket';
        $this->messages['en'][] = 'Open ticket';
        $this->messages['en'][] = 'Support mail';
        $this->messages['en'][] = 'Day';
        $this->messages['en'][] = 'Folders';
        $this->messages['en'][] = 'Compose';
        $this->messages['en'][] = 'Inbox';
        $this->messages['en'][] = 'Sent';
        $this->messages['en'][] = 'Archived';
        $this->messages['en'][] = 'Archive';
        $this->messages['en'][] = 'Recover';
        $this->messages['en'][] = 'Options';
        $this->messages['en'][] = 'New Issue';
        $this->messages['en'][] = 'Code';
        $this->messages['en'][] = 'Phone';
        $this->messages['en'][] = 'Address';
        $this->messages['en'][] = 'City';
        $this->messages['en'][] = 'Birthdate';
        $this->messages['en'][] = 'Logout';
        $this->messages['en'][] = 'Registration';
        $this->messages['en'][] = 'Expiration';
        $this->messages['en'][] = 'Call';
        $this->messages['en'][] = 'Author';
        $this->messages['en'][] = 'Authors';
        $this->messages['en'][] = 'Edition';
        $this->messages['en'][] = 'Volume';
        $this->messages['en'][] = 'Collection';
        $this->messages['en'][] = 'Classification';
        $this->messages['en'][] = 'Publisher';
        $this->messages['en'][] = 'Place';
        $this->messages['en'][] = 'Abstract';
        $this->messages['en'][] = 'Note';
        $this->messages['en'][] = 'Notes';
        $this->messages['en'][] = 'Basic data';
        $this->messages['en'][] = 'Secundary data';
        $this->messages['en'][] = 'Items';
        $this->messages['en'][] = 'Subjects';
        $this->messages['en'][] = 'Barcode';
        $this->messages['en'][] = 'Status';
        $this->messages['en'][] = 'Cost';
        $this->messages['en'][] = 'Acquire date';
        $this->messages['en'][] = 'Record added';
        $this->messages['en'][] = 'Success';
        $this->messages['en'][] = 'Not available';
        $this->messages['en'][] = 'Books';
        $this->messages['en'][] = 'Book';
        $this->messages['en'][] = 'Members';
        $this->messages['en'][] = 'Member';
        $this->messages['en'][] = 'Loans';
        $this->messages['en'][] = 'Loan';
        $this->messages['en'][] = 'Apply';
        $this->messages['en'][] = 'Not checked out';
        $this->messages['en'][] = 'Report filters';
        $this->messages['en'][] = 'Output';
        $this->messages['en'][] = 'Report generated';
        $this->messages['en'][] = 'No records found';
        $this->messages['en'][] = 'Loan date';
        $this->messages['en'][] = 'Arrive date';
        $this->messages['en'][] = 'Collections';
        $this->messages['en'][] = 'Classifications';
        $this->messages['en'][] = 'Publishers';
        $this->messages['en'][] = 'Cities';
        $this->messages['en'][] = 'Check in';
        $this->messages['en'][] = 'Check out';
        $this->messages['en'][] = 'Circulation';
        $this->messages['en'][] = 'Reports';
        $this->messages['en'][] = 'Cataloging';
        $this->messages['en'][] = 'Status';
        $this->messages['en'][] = 'Incorrect password';
        $this->messages['en'][] = 'Mnemonic';
        $this->messages['en'][] = 'Not active';
        $this->messages['en'][] = 'Role';
        $this->messages['en'][] = 'Roles';
        $this->messages['en'][] = 'Address';
        $this->messages['en'][] = 'Project';
        $this->messages['en'][] = 'Projects';
        $this->messages['en'][] = 'Priority';
        $this->messages['en'][] = 'Priorities';
        $this->messages['en'][] = 'Release';
        $this->messages['en'][] = 'Releases';
        $this->messages['en'][] = 'Time';
        $this->messages['en'][] = 'Assigned to';
        $this->messages['en'][] = 'Start date';
        $this->messages['en'][] = 'Due date';
        $this->messages['en'][] = 'Solution';
        $this->messages['en'][] = 'Final state';
        $this->messages['en'][] = 'View';
        $this->messages['en'][] = 'Comment';
        $this->messages['en'][] = 'Current password';
        $this->messages['en'][] = 'New password';
        $this->messages['en'][] = 'Confirm new password';
        $this->messages['en'][] = 'Current password does not match';
        $this->messages['en'][] = 'New password does not match the confirm password';
        $this->messages['en'][] = 'Password changed successfully';
        $this->messages['en'][] = 'Send e-mail';
        $this->messages['en'][] = 'Issue';
        $this->messages['en'][] = 'Issues';
        $this->messages['en'][] = 'Content';
        $this->messages['en'][] = 'Bug';
        $this->messages['en'][] = 'New feature';
        $this->messages['en'][] = 'Improvement';
        $this->messages['en'][] = 'Task';
        $this->messages['en'][] = 'Support';
        $this->messages['en'][] = 'In progress';
        $this->messages['en'][] = 'Waiting feedback';
        $this->messages['en'][] = 'Resolved';
        $this->messages['en'][] = 'Testing';
        $this->messages['en'][] = 'Deploy';
        $this->messages['en'][] = 'Closed';
        $this->messages['en'][] = 'Rejected';
        $this->messages['en'][] = 'Low';
        $this->messages['en'][] = 'Normal';
        $this->messages['en'][] = 'High';
        $this->messages['en'][] = 'Urgent';
        $this->messages['en'][] = 'Language';
        $this->messages['en'][] = 'Try again';
        $this->messages['en'][] = 'Contact';
        $this->messages['en'][] = 'Português';
        $this->messages['en'][] = 'Versão português';
        $this->messages['en'][] = 'News';
        $this->messages['en'][] = 'Tools';
        $this->messages['en'][] = 'Services';
        $this->messages['en'][] = 'Tickets';
        $this->messages['en'][] = 'Community';
        $this->messages['en'][] = 'Store';
        $this->messages['en'][] = 'Not logged';
        $this->messages['en'][] = 'Color';
        $this->messages['en'][] = 'Setup';
        
        $this->messages['pt'][] = 'Arquivo não encontrado';
        $this->messages['pt'][] = 'Buscar';
        $this->messages['pt'][] = 'Cadastrar';
        $this->messages['pt'][] = 'Registro salvo';
        $this->messages['pt'][] = 'Deseja realmente excluir ?';
        $this->messages['pt'][] = 'Registro excluído';
        $this->messages['pt'][] = 'Função';
        $this->messages['pt'][] = 'Tabela';
        $this->messages['pt'][] = 'Ferramenta';
        $this->messages['pt'][] = 'Dados';
        $this->messages['pt'][] = 'Abrir';
        $this->messages['pt'][] = 'Novo';
        $this->messages['pt'][] = 'Salvar';
        $this->messages['pt'][] = 'Buscar';
        $this->messages['pt'][] = 'Editar';
        $this->messages['pt'][] = 'Excluir';
        $this->messages['pt'][] = 'Cancelar';
        $this->messages['pt'][] = 'Sim';
        $this->messages['pt'][] = 'Não';
        $this->messages['pt'][] = 'Janeiro';
        $this->messages['pt'][] = 'Fevereiro';
        $this->messages['pt'][] = 'Março';
        $this->messages['pt'][] = 'Abril';
        $this->messages['pt'][] = 'Maio';
        $this->messages['pt'][] = 'Junho';
        $this->messages['pt'][] = 'Julho';
        $this->messages['pt'][] = 'Agosto';
        $this->messages['pt'][] = 'Setembro';
        $this->messages['pt'][] = 'Outubro';
        $this->messages['pt'][] = 'Novembro';
        $this->messages['pt'][] = 'Dezembro';
        $this->messages['pt'][] = 'Hoje';
        $this->messages['pt'][] = 'Fechar';
        $this->messages['pt'][] = 'O campo ^1 não pode ter menos de ^2 caracteres';
        $this->messages['pt'][] = 'O campo ^1 não pode ter mais de ^2 caracteres';
        $this->messages['pt'][] = 'O campo ^1 não pode ser menor que ^2';
        $this->messages['pt'][] = 'O campo ^1 não pode ser maior que ^2';
        $this->messages['pt'][] = 'O campo ^1 é obrigatório';
        $this->messages['pt'][] = 'O campo ^1 não contém um CNPJ válido';
        $this->messages['pt'][] = 'O campo ^1 não contém um CPF válido';
        $this->messages['pt'][] = 'O campo ^1 contém um e-mail inválido';
        $this->messages['pt'][] = 'Permissão negada';
        $this->messages['pt'][] = 'Gerar';
        $this->messages['pt'][] = 'Listar';
        $this->messages['pt'][] = 'Senha errada';
        $this->messages['pt'][] = 'Usuário não encontrado';
        $this->messages['pt'][] = 'Usuário';
        $this->messages['pt'][] = 'Usuários';
        $this->messages['pt'][] = 'Senha';
        $this->messages['pt'][] = 'Login';
        $this->messages['pt'][] = 'Nome';
        $this->messages['pt'][] = 'Grupo';
        $this->messages['pt'][] = 'Grupos';
        $this->messages['pt'][] = 'Programa';
        $this->messages['pt'][] = 'Programas';
        $this->messages['pt'][] = 'Voltar para a listagem';
        $this->messages['pt'][] = 'Classe de controle';
        $this->messages['pt'][] = 'Email';
        $this->messages['pt'][] = 'Registro atualizado';
        $this->messages['pt'][] = 'Confirma senha';
        $this->messages['pt'][] = 'Tela inicial';
        $this->messages['pt'][] = 'Nome da Tela';
        $this->messages['pt'][] = 'As senhas não conferem';
        $this->messages['pt'][] = 'Entrar';
        $this->messages['pt'][] = 'Data';
        $this->messages['pt'][] = 'Coluna';
        $this->messages['pt'][] = 'Operação';
        $this->messages['pt'][] = 'Valor antigo';
        $this->messages['pt'][] = 'Valor novo';
        $this->messages['pt'][] = 'Database';
        $this->messages['pt'][] = 'Profile';
        $this->messages['pt'][] = 'Mudar senha';
        $this->messages['pt'][] = 'Deixe vazio para manter a senha anterior';
        $this->messages['pt'][] = 'Resultados';
        $this->messages['pt'][] = 'Comando inválido';
        $this->messages['pt'][] = '^1 registros exibidos';
        $this->messages['pt'][] = 'Administração';
        $this->messages['pt'][] = 'Painel SQL';
        $this->messages['pt'][] = 'Log de acesso';
        $this->messages['pt'][] = 'Log de alterações';
        $this->messages['pt'][] = 'Log de SQL';
        $this->messages['pt'][] = 'Limpar formulário';
        $this->messages['pt'][] = 'Enviar';
        $this->messages['pt'][] = 'Mensagem';
        $this->messages['pt'][] = 'Assunto';
        $this->messages['pt'][] = 'Mensagem enviada com sucesso';
        $this->messages['pt'][] = 'Marcar como lida';
        $this->messages['pt'][] = 'Marcar como não lida';
        $this->messages['pt'][] = 'Ação';
        $this->messages['pt'][] = 'Ler';
        $this->messages['pt'][] = 'Origem';
        $this->messages['pt'][] = 'Verificado';
        $this->messages['pt'][] = 'Objeto ^1 não encontrado em ^2';
        $this->messages['pt'][] = 'Notificação';
        $this->messages['pt'][] = 'Categorias';
        $this->messages['pt'][] = 'Enviar documentos';
        $this->messages['pt'][] = 'Meus documentos';
        $this->messages['pt'][] = 'Compartilhados comigo';
        $this->messages['pt'][] = 'Documento';
        $this->messages['pt'][] = 'Arquivo';
        $this->messages['pt'][] = 'Título';
        $this->messages['pt'][] = 'Descrição';
        $this->messages['pt'][] = 'Categoria';
        $this->messages['pt'][] = 'Data de submissão';
        $this->messages['pt'][] = 'Data de arquivamento';
        $this->messages['pt'][] = 'Upload';
        $this->messages['pt'][] = 'Download';
        $this->messages['pt'][] = 'Próximo';
        $this->messages['pt'][] = 'Documentos';
        $this->messages['pt'][] = 'Permissão';
        $this->messages['pt'][] = 'Unidade';
        $this->messages['pt'][] = 'Unidades';
        $this->messages['pt'][] = 'Adiciona';
        $this->messages['pt'][] = 'Ativo';
        $this->messages['pt'][] = 'Ativar/desativar';
        $this->messages['pt'][] = 'Usuário inativo';
        $this->messages['pt'][] = 'Envia mensagem';
        $this->messages['pt'][] = 'Um usuário já está cadastrado com este login';
        $this->messages['pt'][] = 'Estatísticas de acesso';
        $this->messages['pt'][] = 'Acessos';
        $this->messages['pt'][] = 'Preferências';
        $this->messages['pt'][] = 'E-mail de origem';
        $this->messages['pt'][] = 'Autentica SMTP';
        $this->messages['pt'][] = 'Host SMTP';
        $this->messages['pt'][] = 'Porta SMTP';
        $this->messages['pt'][] = 'Usuário SMTP';
        $this->messages['pt'][] = 'Senha SMTP';
        $this->messages['pt'][] = 'Ticket';
        $this->messages['pt'][] = 'Abrir ticket';
        $this->messages['pt'][] = 'Email de suporte';
        $this->messages['pt'][] = 'Dia';
        $this->messages['pt'][] = 'Pastas';
        $this->messages['pt'][] = 'Compor';
        $this->messages['pt'][] = 'Entrada';
        $this->messages['pt'][] = 'Enviados';
        $this->messages['pt'][] = 'Arquivados';
        $this->messages['pt'][] = 'Arquivar';
        $this->messages['pt'][] = 'Recuperar';
        $this->messages['pt'][] = 'Opções';
        $this->messages['pt'][] = 'Novo chamado';
        $this->messages['pt'][] = 'Código';
        $this->messages['pt'][] = 'Fone';
        $this->messages['pt'][] = 'Endereço';
        $this->messages['pt'][] = 'Cidade';
        $this->messages['pt'][] = 'Nascimento';
        $this->messages['pt'][] = 'Logout';
        $this->messages['pt'][] = 'Registro';
        $this->messages['pt'][] = 'Expiração';
        $this->messages['pt'][] = 'Chamada';
        $this->messages['pt'][] = 'Autor';
        $this->messages['pt'][] = 'Autores';
        $this->messages['pt'][] = 'Edição';
        $this->messages['pt'][] = 'Volume';
        $this->messages['pt'][] = 'Coleção';
        $this->messages['pt'][] = 'Classificação';
        $this->messages['pt'][] = 'Editora';
        $this->messages['pt'][] = 'Lugar';
        $this->messages['pt'][] = 'Resumo';
        $this->messages['pt'][] = 'Nota';
        $this->messages['pt'][] = 'Notas';
        $this->messages['pt'][] = 'Dados básicos';
        $this->messages['pt'][] = 'Dados secundários';
        $this->messages['pt'][] = 'Exemplares';
        $this->messages['pt'][] = 'Assuntos';
        $this->messages['pt'][] = 'Cod.Barras';
        $this->messages['pt'][] = 'Estado';
        $this->messages['pt'][] = 'Custo';
        $this->messages['pt'][] = 'Data aquisição';
        $this->messages['pt'][] = 'Registro adicionado';
        $this->messages['pt'][] = 'Sucesso';
        $this->messages['pt'][] = 'Não disponível';
        $this->messages['pt'][] = 'Livros';
        $this->messages['pt'][] = 'Livro';
        $this->messages['pt'][] = 'Usuários';
        $this->messages['pt'][] = 'Usuário';
        $this->messages['pt'][] = 'Empréstimos';
        $this->messages['pt'][] = 'Empréstimo';
        $this->messages['pt'][] = 'Aplicar';
        $this->messages['pt'][] = 'Não emprestado';
        $this->messages['pt'][] = 'Filtros do relatório';
        $this->messages['pt'][] = 'Saída';
        $this->messages['pt'][] = 'Relatório gerado';
        $this->messages['pt'][] = 'Não foram encontrados registros';
        $this->messages['pt'][] = 'Empréstimo';
        $this->messages['pt'][] = 'Devolução';
        $this->messages['pt'][] = 'Coleções';
        $this->messages['pt'][] = 'Classificações';
        $this->messages['pt'][] = 'Editoras';
        $this->messages['pt'][] = 'Cidades';
        $this->messages['pt'][] = 'Devolver';
        $this->messages['pt'][] = 'Emprestar';
        $this->messages['pt'][] = 'Circulação';
        $this->messages['pt'][] = 'Relatórios';
        $this->messages['pt'][] = 'Catalogação';
        $this->messages['pt'][] = 'Estado';
        $this->messages['pt'][] = 'Senha incorreta';
        $this->messages['pt'][] = 'Mnemônico';
        $this->messages['pt'][] = 'Não está ativo';
        $this->messages['pt'][] = 'Papel';
        $this->messages['pt'][] = 'Papéis';
        $this->messages['pt'][] = 'Endereço';
        $this->messages['pt'][] = 'Projeto';
        $this->messages['pt'][] = 'Projetos';
        $this->messages['pt'][] = 'Prioridade';
        $this->messages['pt'][] = 'Prioridades';
        $this->messages['pt'][] = 'Release';
        $this->messages['pt'][] = 'Releases';
        $this->messages['pt'][] = 'Hora';
        $this->messages['pt'][] = 'Atribuído para';
        $this->messages['pt'][] = 'Data inicial';
        $this->messages['pt'][] = 'Data final';
        $this->messages['pt'][] = 'Solução';
        $this->messages['pt'][] = 'Estado final';
        $this->messages['pt'][] = 'Visualizar';
        $this->messages['pt'][] = 'Comentar';
        $this->messages['pt'][] = 'Senha atual';
        $this->messages['pt'][] = 'Nova senha';
        $this->messages['pt'][] = 'Confirme a nova senha';
        $this->messages['pt'][] = 'A senha atual não está correta';
        $this->messages['pt'][] = 'A nova senha não confere com a senha de confirmação';
        $this->messages['pt'][] = 'Senha alterada com sucesso';
        $this->messages['pt'][] = 'Enviar e-mail';
        $this->messages['pt'][] = 'Chamado';
        $this->messages['pt'][] = 'Chamados';
        $this->messages['pt'][] = 'Conteúdo';
        $this->messages['pt'][] = 'Bug';
        $this->messages['pt'][] = 'Nova funcionalidade';
        $this->messages['pt'][] = 'Melhoria';
        $this->messages['pt'][] = 'Tarefa';
        $this->messages['pt'][] = 'Suporte';
        $this->messages['pt'][] = 'Em progresso';
        $this->messages['pt'][] = 'Aguardando feedback';
        $this->messages['pt'][] = 'Resolvido';
        $this->messages['pt'][] = 'Testando';
        $this->messages['pt'][] = 'Entregue';
        $this->messages['pt'][] = 'Fechado';
        $this->messages['pt'][] = 'Rejeitado';
        $this->messages['pt'][] = 'Baixa';
        $this->messages['pt'][] = 'Normal';
        $this->messages['pt'][] = 'Alta';
        $this->messages['pt'][] = 'Urgente';
        $this->messages['pt'][] = 'Linguagem';
        $this->messages['pt'][] = 'Tente novamente';
        $this->messages['pt'][] = 'Contato';
        $this->messages['pt'][] = 'English';
        $this->messages['pt'][] = 'English version';
        $this->messages['pt'][] = 'Notícias';
        $this->messages['pt'][] = 'Ferramentas';
        $this->messages['pt'][] = 'Serviços';
        $this->messages['pt'][] = 'Chamados';
        $this->messages['pt'][] = 'Comunidade';
        $this->messages['pt'][] = 'Loja';
        $this->messages['pt'][] = 'Não logado';
        $this->messages['pt'][] = 'Cor';
        $this->messages['pt'][] = 'Configuração';
    }
    
    /**
     * Returns the singleton instance
     * @return  Instance of self
     */
    public static function getInstance()
    {
        // if there's no instance
        if (empty(self::$instance))
        {
            // creates a new object
            self::$instance = new self;
        }
        // returns the created instance
        return self::$instance;
    }
    
    /**
     * Define the target language
     * @param $lang     Target language index
     */
    public static function setLanguage($lang)
    {
        $instance = self::getInstance();
        $instance->lang = $lang;
    }
    
    /**
     * Returns the target language
     * @return Target language index
     */
    public static function getLanguage()
    {
        $instance = self::getInstance();
        return $instance->lang;
    }
    
    /**
     * Translate a word to the target language
     * @param $word     Word to be translated
     * @return          Translated word
     */
    static public function translate($word, $param1 = NULL, $param2 = NULL, $param3 = NULL)
    {
        // get the self unique instance
        $instance = self::getInstance();
        // search by the numeric index of the word
        $key = array_search($word, $instance->messages['en']);
        if ($key !== FALSE)
        {
            // get the target language
            $language = self::getLanguage();
            // returns the translated word
            $message = $instance->messages[$language][$key];
            
            if (isset($param1))
            {
                $message = str_replace('^1', $param1, $message);
            }
            if (isset($param2))
            {
                $message = str_replace('^2', $param2, $message);
            }
            if (isset($param3))
            {
                $message = str_replace('^3', $param3, $message);
            }
            return $message;
        }
        else
        {
            return 'Message not found: '. $word;
        }
    }
    
    /**
     * Translate a template file
     */
    static public function translateTemplate($template)
    {
        // get the self unique instance
        $instance = self::getInstance();
        // search by the numeric index of the word
        foreach ($instance->messages['en'] as $word)
        {
            $translated = _t($word);
            $template = str_replace('_t{'.$word.'}', $translated, $template);
        }
        return $template;
    }
}

/**
 * Facade to translate words
 * @param $word  Word to be translated
 * @param $param1 optional ^1
 * @param $param2 optional ^2
 * @param $param3 optional ^3
 * @return Translated word
 */
function _t($msg, $param1 = null, $param2 = null, $param3 = null)
{
        return ApplicationTranslator::translate($msg, $param1, $param2, $param3);
}
