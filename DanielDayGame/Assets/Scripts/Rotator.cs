using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Rotator : MonoBehaviour {

    void Update () 
    {
        transform.Rotate (new Vector3 (15, 30, 45) * Time.deltaTime);
    }
}
//https://unity3d.com/learn/tutorials/projects/roll-ball-tutorial/creating-collectable-objects?playlist=17141