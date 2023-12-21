<header class="bg-gray-800 text-white">
    <nav class="flex items-center justify-between p-4">
        <div>
            <!-- Puedes agregar un logotipo aquí si lo deseas -->
        </div>
        <ul class="flex space-x-4">
            <li><a href="{{ route('index') }}" class="hover:text-gray-300">Inicio</a></li>
            <li><a href="{{ route('service') }}" class="hover:text-gray-300">Servicios</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-gray-300">Contacto</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gray-300">Acerca de</a></li>
        </ul>
    </nav>
</header>
