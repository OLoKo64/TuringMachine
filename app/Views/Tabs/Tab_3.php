<div class= "mb-4">
			<h3 class= "mb-4">
					Descrição técnica
			</h3>
            <h5>
                Circular e as máquinas circle-free.
            </h5>
					
			<p>
                 Se uma máquina de computação nunca escreve mais do que um número finito
                de símbolos do primeiro tipo, será denominado circular. Caso contrário, é dito que
                ser circle-free.
                Uma máquina será circular se atingir uma configuração a partir da qual
                não é possível mover, ou se continuar se movendo, e possivelmente imprimindo símbolos
                do segundo tipo, mas não pode imprimir mais nenhum símbolo do primeiro tipo.
			</p>
                <br>
            <h5>
                Sequências e números computáveis.
            </h5>
            <p>
                Uma sequência é considerada computável se puder ser computada por uma máquina circle-free. Um número é computável se difere por um inteiro do
                número calculado por uma máquina circle-free.
                Devemos evitar confusão falando mais frequentemente de sequências computáveis
                do que de números computáveis.
            </p>
            <br>
            <h5>
                Exemplos de Máquinas
            </h5>
            <p>
                Uma máquina pode ser construída para calcular a sequência 010101 .... A máquina deve ter as quatro configurações-m "b", "c", "£", "c" e é capaz de imprimir "0" e "1". O comportamento da máquina é descrito na tabela a seguir, em que "R" significa "a máquina se move de modo que varre o quadrado imediatamente à direita daquele onde estava observando anteriormente". Da mesma forma, para" L "." E "significa" o o símbolo escaneado é apagado "e" P "significa" impressões ". Esta tabela (e todas sucessivas tabelas do mesmo tipo) deve ser entendida como significando que para uma configuração descrita nas duas primeiras colunas, as operações na terceira coluna são realizadas sucessivamente, e a máquina então passa na configuração m descrita na última coluna. Quando a segunda coluna é deixada em branco, entende-se que o comportamento da terceira e a quarta coluna aplica-se a qualquer símbolo e a nenhum símbolo. A máquina começa na configuração-m b com uma fita em branco.
            </p>
            <img src="https://i.imgur.com/eIKw3cB.png" class="w-50 rounded mb-4 mt-4 mx-auto d-block" alt="Responsive image">
            <p>
                Se (ao contrário da descrição) permitirmos que as letras L, R apareçam
                mais de uma vez na coluna de operações podemos simplificar a tabela
                consideravelmente.
            </p>
            <img src="https://i.imgur.com/vpedRbQ.png" class="w-50 rounded mb-4 mt-4 mx-auto d-block" alt="Responsive image">
            <p>
                Como um exemplo um pouco mais difícil, podemos construir uma máquina para
                computar a sequência 001011011101111011111 A máquina deve
                ser capaz de cinco configurações-ra. "o", "q", "p", "f", "b" e de
                imprimir "o", "x", "0", "1". Os primeiros três símbolos na fita irão
                ser "aoO"; as outras figuras seguem em quadrados alternados. Nos quadrados intermediários, nunca imprimimos nada além de "x". Esses caracteres servem para
                "guardam o lugar" para nós e são apagados quando acabamos com eles.
                Também organizamos isso na sequência de figuras em quadrados alternados.
                Não deve haver espaços em branco.
            </p>
            <img src="https://i.imgur.com/1ZSzVyF.png" class="w-50 rounded mb-4 mt-4 mx-auto d-block" alt="Responsive image">
            
            <a class="btn" target="_blank" href="https://www.cs.virginia.edu/~robins/Turing_Paper_1936.pdf">Link de Referência »</a>
</div>
