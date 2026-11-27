@props(['id', 'evidencia'])

<x-layout :titulo="'Modificar evidencia ' . $id">
    <x-formulario-evidencias-edit :id="$id" :evidencia="$evidencia"/>
</x-layout>
