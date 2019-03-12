using UnityEngine;
using System.Collections;
public class BasicAI : MonoBehaviour {
     public Transform target;
     public float moveSpeed = 100;
     public float realtime;
     
     private Transform myTransform;
     
     void Awake() {
         myTransform = transform;
     }    
     
     // Use this for initialization
     void Start () {
         GameObject go = GameObject.FindGameObjectWithTag("Player");
         target = go.transform;
     }        
     
     
     
     
     // Update is called once per frame
     void FixedUpdate () {
         Vector3 playerPosition = new Vector3 (target.position.x, 0.0f, 0.0f);
         GetComponent<Rigidbody> ().velocity = playerPosition * moveSpeed; 
         myTransform.transform.Translate (Mathf.Clamp(moveSpeed*0,0,realtime*Time.deltaTime),0f,0f);
 
     }
}
/*
    public Transform target;
    public Transform myTransform;

    static Player_control reference;
    public float speed = 6.0F;
    private Vector3 moveDirection = Vector3.zero;
    void Update() {
        if(GameObject.Find("ZombieCube") && GameObject.Find("ZombieCube_1") && GameObject.Find("ZombieCube_2")) {
            myTransform.LookAt(target);
            myTransform.Translate(Vector3.forward * 1 * Time.deltaTime);
        }
        else {
            moveDirection = new Vector3(Input.GetAxis("Horizontal"), 0, Input.GetAxis("Vertical"));
            myTransform.LookAt(target);
            myTransform.Translate(Vector3.forward * 1 * Time.deltaTime);
            moveDirection *= speed;
        }
    }
}*/