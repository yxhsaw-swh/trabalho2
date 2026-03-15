<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Usuários</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .table-responsive {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            overflow: hidden;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 15px;
            text-align: left;
            font-size: 13px;
            text-transform: uppercase;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
            color: #444;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f7ff;
        }

        .btn-icon {
            background: none;
            border: none;
            color: #004a8d;
            cursor: pointer;
            font-size: 16px;
            margin-right: 5px;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
        }
        
        .badge.ativo {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>

<main>
    <div class="header-content">
        <h2>Gestão de Usuários</h2>
        <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Eric Freitas</td>
                    <td>eric@unifev.edu.br</td>
                    <td>Administrador</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td>
                        <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn-icon" style="color: #d9534f;"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Yasmin Neves</td>
                    <td>120787@email.com</td>
                    <td>Editor</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td>
                        <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn-icon" style="color: #d9534f;"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

</body>
</html>