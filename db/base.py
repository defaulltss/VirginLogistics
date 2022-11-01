import mariadb # ronis, my beloved
# https://mariadb-corporation.github.io/mariadb-connector-python/usage.html

connection= mariadb.connect(user.db)

cursor= connection.cursor()

cursor.execute("SELECT login FROM user")
test= cursor.fetchone()
print(test)

# cursor.close() & connection.close() <-- atbrīvo atmiņu, tas tā - nākotnei...