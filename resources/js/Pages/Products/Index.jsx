import { Link } from '@inertiajs/react';
import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function Index({ products }) {
  return (
      <AuthenticatedLayout>
          <div className="bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen">
              <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                  <div className="rounded-md border-4 border-blue-400 shadow-lg bg-blue-100 py-5">
                      <p className="text-3xl text-center font-bold text-blue-600">Products</p>
                  </div>

                  <div className="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 py-5">
                      {products.map((product) => (
                          <Link
                              key={product.id}
                              href={`/products/${product.id}`}
                              className="group rounded-lg overflow-hidden border border-gray-200 shadow-md hover:shadow-lg hover:scale-105 transition transform duration-300 ease-in-out"
                          >
                              <img
                                  alt={product.name}
                                  src={product.image}
                                  className="aspect-square w-full rounded-t-lg object-cover group-hover:opacity-90 xl:aspect-[7/8]"
                              />
                              <div className="p-4">
                                  <h3 className="mt-2 text-sm font-semibold text-gray-800 group-hover:text-blue-600">
                                      {product.name}
                                  </h3>
                                  <p className="mt-1 text-lg font-medium text-blue-700">${product.price}</p>
                              </div>
                          </Link>
                      ))}
                  </div>
              </div>
          </div>
      </AuthenticatedLayout>
  );
}