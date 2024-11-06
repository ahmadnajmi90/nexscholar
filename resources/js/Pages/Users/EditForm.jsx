import TextInput from '@/Components/TextInput'
import React from 'react'
import { Head, Link, useForm } from '@inertiajs/react';

function EditForm({userDetails}) {
    const { data, setData, post, errors, processing } = useForm({
        id: userDetails.id,       // Make sure this is populated correctly
        name: userDetails.name,
        email: userDetails.email,
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('users.update', { user_id: data.id })); // Pass the user_id parameter here
    };

  return (

<div className="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
  <div className="mx-auto max-w-lg text-center">
    <h1 className="text-2xl font-bold sm:text-3xl">Get  today!</h1>

    <p className="mt-4 text-gray-500">
      Register a new User here
    </p>
  </div>

  <form onSubmit={submit} className="mx-auto mb-0 mt-8 max-w-md space-y-4">
    <TextInput className="w-full" placeholder=" "
    type="hidden"
        value={data.id}
        onChange = {(e) => setData('id', e.target.value)}
        />
    <div>
      <label htmlFor="name" className="sr-only">Nam</label>

      <div >
        <TextInput className="w-full" placeholder="Name "
        value={data.name}
        onChange = {(e) => setData('name', e.target.value)}
        />
      </div>
    </div>

    <div>
      <label htmlFor="email" className="sr-only">Email</label>

      <div >
        <TextInput type="email" className="w-full" placeholder="Email"
        value={data.email}
        onChange = {(e) => setData('email', e.target.value)}
        />
      </div>
    </div>

    <div className="flex items-center justify-between">


      <button
        type="submit"
        disabled={processing}
        className="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
      >
        Save
      </button>
    </div>
  </form>
</div>
  )
}

export default EditForm