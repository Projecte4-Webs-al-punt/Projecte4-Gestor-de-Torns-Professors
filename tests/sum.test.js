const funcions = require('./funcions');

describe('Funcions', () => {
  test('Sum 1 + 1 retorna 2', () => {
    expect(funcions.sum(1, 1)).toBe(2);
  });

  test('Sum 1 - 1 retorna 0', () => {
    expect(funcions.resta(1, 1)).toBe(0);
  });

  test('Sum 1 * 1 retorna 1', () => {
    expect(funcions.multiplicar(1, 1)).toBe(1);
  });

  test('Sum 1 / 1 retorna 1', () => {
    expect(funcions.divisio(1, 1)).toBe(1);
  });
});