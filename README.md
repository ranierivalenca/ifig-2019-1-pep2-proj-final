# ifig-2019-1-pep2-proj-final

Este é esboço de um sistema acadêmico.

O sistema deve ter as seguintes tabelas:
- Curso: tabela de cursos
  - Nome do curso
  - Quantidade de períodos
- Disciplina: tabela de disciplinas dos cursos
  - Nome da disciplina
  - Carga horária
- Professor: tabela de professores
  - Nome do professor
  - cpf
  - email
  - senha
- Estudante: tabela de estudantes
  - Nome do estudante
  - matricula
  - email
  - senha
- Turma: tabela de turmas - relaciona disciplinas e professores
  - Semestres
- Matrícula: tabela de matrícula de estudantes em turmas - relaciona turmas e estudantes
  - Nota 1
  - Nota 2

Relacionamentos:
- Um curso tem várias disciplinas, e cada disciplina está relacionada a apenas um curso;
- Uma turma tem relaciona uma disciplina com um professor
- Uma matrícula relaciona uma turma com um estudante

----

O sistema deve ter uma tela de administrador (login com admin:admin), que pode adicionar, remover ou editar cursos, disciplinas em cada um dos cursos, professores, turmas, estudantes e fazer as matrículas dos estudantes nas turmas.

A tela de professor (login com cpf:senha) deve permitir que o professor associe as notas 1 e 2 de cada estudante matrícula em cada uma das turmas que ele tiver.

A tela do estudante (login com matricula:senha) deve permitir que o estudante veja suas notas em cada uma das turmas que está matriculado.
