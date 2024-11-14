<div>
    <x-header title="Registro de un nuevo local" />
    <x-section-header
        title="Datos del local"
        subtitle="Ingrese toda la información para el registro del hotel">

        <!-- Formulario -->
        <form method="post" >
            @csrf
            <!--Nombre-->
            <x-forms.form-input
                id="nombre"
                name="nombre"
                value=""
                label="Nombre del local"
                type="text"
            />

            <!--Dirección-->
            <x-forms.form-input
                id="direccion"
                name="direccion"
                value=""
                label="Dirección del local"
                type="text"
            />
            <x-forms.form-input
                id="telefono"
                name="telefono"
                value=""
                label="Teléfono del local"
                type="text"
            />
        </form>

    </x-section-header>
</div>
