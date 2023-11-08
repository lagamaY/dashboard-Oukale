import time
import roslibpy

def main():
    # Initialiser ROS
    ros = roslibpy.Ros(host='oukale-robot', port=9090, is_secure=False)  # Remplacez 'oukale-robot' par l'adresse IP de votre Raspberry Pi
    ros.run()

    # S'abonner aux topics des capteurs
    imu_sub = roslibpy.Topic(ros, '/imu_data', 'geometry_msgs/Vector3')
    sensors_sub = roslibpy.Topic(ros, '/sensors_data', 'std_msgs/Float32MultiArray')

    imu_data = None
    sensors_data = None

    def imu_callback(message):
        nonlocal imu_data
        imu_data = message

    def sensors_callback(message):
        nonlocal sensors_data
        sensors_data = message

    imu_sub.subscribe(imu_callback)
    sensors_sub.subscribe(sensors_callback)

    try:
        while ros.is_connected:
            if imu_data is not None and sensors_data is not None:

                temp = sensors_data['data'][0]
                print(temp)
                # return temp
                time.sleep(10)
                ros.terminate()

    except KeyboardInterrupt:
        pass
    finally:
        ros.terminate()

if __name__ == "__main__":
    main()
