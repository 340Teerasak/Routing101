import { Link } from '@inertiajs/react';

export default function Show({ product }) {
  return (
    <div style={{ maxWidth: '600px', margin: '0 auto', padding: '20px', backgroundColor: '#e6f2ff', borderRadius: '8px' }}>
      <h1 style={{ textAlign: 'center', color: '#0056b3' }}>{product.name}</h1>
      <p style={{ fontSize: '16px', lineHeight: '1.5', color: '#333' }}>{product.description}</p>
      <p style={{ fontSize: '18px', fontWeight: 'bold', color: '#000' }}>Price: ${product.price}</p>
      <hr />
      <Link
        href="/products"
        style={{ display: 'inline-block', marginTop: '20px', textDecoration: 'none', color: '#0056b3', fontWeight: 'bold' }}
      >
        Back to All Products
      </Link>
    </div>
  );
}