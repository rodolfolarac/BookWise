<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="email" required>
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="password" required>
            </div>
            <button type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 cursor-pointer">
                Logar
            </button>
        </form>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registrar</h1>
        <form method="POST" action="/registrar" class="p-4 space-y-4">
            <?php if (strlen($mensagem) > 0): ?>
                <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="nome" required>
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="email" required>
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu email</label>
                <input
                    type="email"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="email_confirmacao" required>
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="max-w-[100%] w-full border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 max-w-1/4"
                    name="senha" required>
            </div>
            <button type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 cursor-pointer">
                Registrar
            </button>
            <button type="reset"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border border-2 hover:bg-stone-800 cursor-pointer">
                Cancelar
            </button>
        </form>
    </div>
</div>
