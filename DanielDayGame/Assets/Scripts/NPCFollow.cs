using UnityEngine;
using System.Collections;
public class BasicMove : MonoBehaviour {
    public Transform target;
    public Transform myTransform;
    public Player_control reference;
    public int track_enemies;
    void Update() {
        track_enemies = 0;
        myTransform.LookAt(target);
        myTransform.Translate(Vector3.forward * 1 * Time.deltaTime);
        if(GameObject.Find("ZombieCube")) {
            track_enemies++;
        }
        if(GameObject.Find("ZombieCube_1")) {
            track_enemies++;
        }
        if(GameObject.Find("ZombieCube_2")) {
            track_enemies++;
        }
        if(track_enemies == 3) {
            myTransform.Translate(Vector3.forward * 1 * Time.deltaTime);
        }
        else if(track_enemies == 2) {
            myTransform.Translate(Vector3.forward * 5 * Time.deltaTime);
        }
         else if(track_enemies == 1) {
            myTransform.Translate(Vector3.forward * 6 * Time.deltaTime);
        }
    }
}