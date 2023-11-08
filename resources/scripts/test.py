import roslibpy

def main():
    try:
        # Tente de se connecter à ROS
        ros = roslibpy.Ros(host='oukale-robot', port=9090, is_secure=False)
        ros.run()

        # Si la connexion réussit, affiche "En ligne"
        print("En ligne")

        # Vous pouvez effectuer d'autres opérations ici si nécessaire

        # Termine la connexion ROS
        ros.terminate()
    except Exception as e:
        # En cas d'erreur de connexion, affiche "Hors ligne" et l'erreur
        print("Hors ligne")
        print(str(e))

if __name__ == "__main__":
    main()
