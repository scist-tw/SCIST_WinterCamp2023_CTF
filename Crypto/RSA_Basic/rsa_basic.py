from Crypto.Util.number import *

flag = '?????'

p = getPrime(1000)
q = getPrime(1000)
n = p*q

e = 65537
m = bytes_to_long(flag)
c = pow(m, e, n)

print("n:", n)
print("e:", e)
print("c:", c)